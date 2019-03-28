<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\{DB, URL};

use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


/**
 * Class Person.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Person  extends BaseModel implements PositionInterface
{

	use PositionTrait;

	protected $fillable = array(
		'forename',
		'surname',
		'birthday',
		'deceased',
		'bio',
		'image',
		'imdb_id'
	);

	protected $dates = [
		'birthday',
		'deceased'
	];


    /**
     * Set the route lookup field key.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * @return mixed
     */
    public function roles()
	{
		return $this->belongsToMany(Movie::class, 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character')
            ->bySortName();
	}


    /**
     * @return mixed
     */
	public function positions()
	{
		return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
			->withPivot('id', 'position')
			->bySortname()
			->byPosition()
			->orderBy('name', 'asc');
	}


    /**
     * @return mixed
     */
	public function directed()
	{
		return $this->getPosition(self::DIRECTOR);
	}


    /**
     * @return mixed
     */
	public function produced()
	{
		return $this->getPosition(self::PRODUCER);
	}


    /**
     * @return mixed
     */
	public function wrote()
	{
		return $this->getPosition(self::WRITER);
	}


    /**
     * @return mixed
     */
	public function scored()
	{
		return $this->getPosition(self::COMPOSER);
	}


    /**
     * @return string
     */
	public function getFullnameAttribute()
	{
		return $this->forename . ' ' . $this->surname;
	}


    /**
     * @return int|string
     */
	public function getAgeAttribute()
	{
	    if($this->birthday !== NULL)
        {
		    $date = $this->deceased ?? Carbon::now();
		    return $date->diffInYears($this->birthday);
        }
	    return '---';
	}


    /**
     * @return string|null
     */
	public function getBornAttribute()
	{
	    if($this->birthday !== NULL)
        {
		    return $this->birthday->format('jS F Y');
        }
	    return null;
	}


    /**
     * @return string|null
     */
	public function getDiedAttribute()
	{
	    if($this->deceased !== NULL)
        {
		    return $this->deceased->format('jS F Y');
        }
	    return null;
	}


    /**
     * @return string
     */
    public function getImagePathAttribute()
    {
        return URL::asset('/images/people/' . $this->image);
    }


    /**
     * @return string
     */
    public function getBannerImagePathAttribute()
    {
        $movie = count($this->roles) ? $this->roles->random() : $this->positions->random();
        return URL::asset('/images/covers/' . $movie->image);
    }


    /**
     * Find movies in the person's bio that have been wrapped
     * in double curly brackets. Turn into a link if
     * the movie exists in the database.
     *
     * @return string
     */
    public function getBioWithLinksAttribute()
    {
        return nl2br( preg_replace_callback('/\{{(.*?)}}/', function($m)
        {
            $crumbs = explode("(", $m[1]);
            $movieName = trim($crumbs[0]);

            $query = Movie::whereName($movieName);

            if (isset($crumbs[1])) {
                $releaseYear = rtrim($crumbs[1], ")");
                if (is_integer($releaseYear)) {
                    $query->whereReleased($releaseYear);
                }
            }

            $movie = $query->first();

            if ($movie) {
                return "<a href='/movies/".$movie->slug."'><b>".$movie->name." (".$movie->released.")</b></a>";
            }
            else {
                return $m[1];
            }
        }, $this->bio));
    }


    /**
     * @param $query
     * @param $name
     * @return mixed
     */
	public function scopeWhereFullname($query, $name): Builder
    {
        return $query->where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%' . $name . '%');
    }


    /**
     * @param $query
     * @param bool $bool
     * @return mixed
     */
	public function scopeAreStars($query, bool $bool = true): Builder
    {
        return $query->where('star', $bool);
    }


    /**
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByStar($query, $direction = 'desc'): Builder
    {
        return $query->orderBy('star', $direction);
    }


    /**
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByForename($query, $direction = 'asc'): Builder
	{
		return $query->orderBy('forename', $direction);
	}


    /**
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeBySurname($query, $direction = 'asc'): Builder
	{
		return $query->orderBy('surname', $direction);
	}


    /**
     * Return an array of all the people.
     *
     * @return array
     */
    public function getPeople(): array
    {
        return $this->byId()
            ->pluck('forename', 'id')
            ->toArray();
    }

}
