<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;

use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


class Person extends Model implements PositionInterface
{

    /**
     * --------------------
     *  TRAITS
     * --------------------
     */

	use PositionTrait;



    /**
     * --------------------
     *  VARIABLES
     * --------------------
     */

    protected $perPage = 20;

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
     * --------------------
     *  RELATIONS
     * --------------------
     */

	public function roles()
	{
		return $this->belongsToMany(Movie::class, 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character')
            ->byReleaseDate();
	}


	public function positions()
	{
		return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
			->withPivot('id', 'position')
			->byReleaseDate()
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


	public function scripted()
	{
		return $this->getPosition(self::WRITER);
	}


	public function scored()
	{
		return $this->getPosition(self::COMPOSER);
	}



    /**
     * --------------------
     *  ACCESSORS
     * --------------------
     */

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


    public function getImagePathAttribute()
    {
        return URL::asset('/images/people/' . $this->image);
    }



    public function getBannerImagePathAttribute()
    {
        $movie = $this->roles->random();
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
                return "<a href='/movies/".$movie->id."'><b>".$movie->name." (".$movie->released.")</b></a>";
            }
            else
            {
                return $m[1];
            }
        }, $this->bio));
    }



    /**
     * --------------------
     *  SCOPES
     * --------------------
     */

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

}
