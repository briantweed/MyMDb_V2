<?php

namespace App\Models;

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


	public function roles()
	{
		return $this->belongsToMany('App\Models\Movie', 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character', 'star');
	}


	public function positions()
	{
		return $this->belongsToMany('App\Models\Movie', 'crew', 'person_id', 'movie_id')
			->withPivot('id', 'position')
			->byReleaseDate()
			->byPosition()
			->orderBy('name', 'asc');
	}


	public function directed()
	{
		return $this->getPosition(self::director);
	}


	public function produced()
	{
		return $this->getPosition(self::producer);
	}


	public function scripted()
	{
		return $this->getPosition(self::writer);
	}


	public function scored()
	{
		return $this->getPosition(self::composer);
	}


	public function getFullnameAttribute()
	{
		return $this->forename . ' ' . $this->surname;
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
