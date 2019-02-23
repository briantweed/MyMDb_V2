<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


class Person extends Model implements PositionInterface
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
     * Set the route lookup field key
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function roles()
	{
		return $this->belongsToMany(Movie::class, 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character')
            ->bySortName();
	}


	public function positions()
	{
		return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
			->withPivot('id', 'position')
			->bySortname()
			->byPosition()
			->orderBy('name', 'asc');
	}


	public function directed()
	{
		return $this->getPosition(self::DIRECTOR);
	}


	public function produced()
	{
		return $this->getPosition(self::PRODUCER);
	}


	public function wrote()
	{
		return $this->getPosition(self::WRITER);
	}


	public function scored()
	{
		return $this->getPosition(self::COMPOSER);
	}


	public function getFullnameAttribute()
	{
		return $this->forename . ' ' . $this->surname;
	}


	public function getAgeAttribute()
	{
	    if($this->birthday !== NULL)
        {
		    $date = $this->deceased ?? Carbon::now();
		    return $date->diffInYears($this->birthday);
        }
	    return '---';
	}


	public function getBornAttribute()
	{
	    if($this->birthday !== NULL)
        {
		    return $this->birthday->format('jS F Y');
        }
	    return null;
	}


	public function getDiedAttribute()
	{
	    if($this->deceased !== NULL)
        {
		    return $this->deceased->format('jS F Y');
        }
	    return null;
	}


    public function getImagePathAttribute()
    {
        return URL::asset('/images/people/' . $this->image);
    }



    public function getBannerImagePathAttribute()
    {
        $movie = count($this->roles) ? $this->roles->random() : $this->positions->random();
        return URL::asset('/images/covers/' . $movie->image);
    }


    public function getBioWithLinksAttribute()
    {
        return nl2br( preg_replace_callback('/\{{(.*?)}}/', function($m)
        {
            $crumbs = explode("(", $m[1]);
            $movieName = trim($crumbs[0]);

            $query = Movie::whereName($movieName);

            if (isset($crumbs[1]))
            {
                $releaseYear = rtrim($crumbs[1], ")");
                if (is_integer($releaseYear))
                {
                    $query->whereReleased($releaseYear);
                }
            }

            $movie = $query->first();

            if ($movie)
            {
                return "<a href='/movies/".$movie->slug."'><b>".$movie->name." (".$movie->released.")</b></a>";
            }
            else
            {
                return $m[1];
            }
        }, $this->bio));
    }


	public function scopeAreStars($query, bool $bool = true)
    {
        return $query->where('star', $bool);
    }


    public function scopeByStar($query, $direction = 'desc')
    {
        return $query->orderBy('star', 'desc');
    }


    public function scopeByForename($query, $direction = 'asc')
	{
		return $query->orderBy('forename', 'asc');
	}


    public function scopeBySurname($query, $direction = 'asc')
	{
		return $query->orderBy('surname', 'asc');
	}

}
