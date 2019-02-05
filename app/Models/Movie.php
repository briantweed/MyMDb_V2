<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


class Movie extends Model implements PositionInterface
{

	use PositionTrait;

	protected $fillable = [
		'name',
		'sort_name',
		'search_name',
		'imdb_id',
		'released',
		'purchased',
		'image',
		'rating',
		'running_time',
		'certificate_id',
		'format_id',
		'studio_id',
		'bio',
		'duplicate',
	];

    protected $dates = [
        'purchased',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'duplicate' => 'boolean'
    ];


	public function studio()
	{
		return $this->belongsTo('App\Models\Studio');
	}


	public function format()
	{
		return $this->belongsTo('App\Models\Format');
	}


	public function certificate()
	{
		return $this->belongsTo('App\Models\Certificate');
	}


	public function cast()
	{
		return $this->belongsToMany('App\Models\Person', 'cast')
			->withPivot('id', 'character', 'star')
			->byStar()
			->byForename();
	}


	public function crew()
	{
		return $this->belongsToMany('App\Models\Person', 'crew')
			->withPivot('id', 'position')
			->byPosition()
			->byForename();
	}


	public function genres()
	{
		return $this->belongsToMany('App\Models\Genre');
	}


	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag');
	}


	public function scopeByReleaseDate($query, $direction = 'desc')
	{
		return $query->orderBy('released', $direction);
	}


	public function scopeBySortName($query, $direction = 'asc')
	{
		return $query->orderBy('sort_name', $direction);
	}




}
