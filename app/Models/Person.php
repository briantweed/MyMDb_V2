<?php

namespace App\Models;

use Carbon\Carbon;

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
		'deceased',
		'created_at',
		'updated_at'
	];



    /**
     * --------------------
     *  RELATIONS
     * --------------------
     */

	public function roles()
	{
		return $this->belongsToMany(Movie::class, 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character', 'star');
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
		$date = $this->deceased ?? Carbon::now();
		return $date->diffInYears($this->birthday);
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
