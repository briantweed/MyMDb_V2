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


    public function cast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->byStar()
            ->byForename();
    }


    public function crew()
    {
        return $this->belongsToMany(Person::class, 'crew')
            ->withPivot('id', 'position')
            ->byPosition()
            ->byForename();
    }


	public function studio()
	{
		return $this->belongsTo(Studio::class);
	}


	public function format()
	{
		return $this->belongsTo(Format::class);
	}


	public function certificate()
	{
		return $this->belongsTo(Certificate::class);
	}


	public function genres()
	{
		return $this->belongsToMany(Genre::class);
	}


	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}


	public function scopeByReleaseDate($query, string $direction = 'desc')
	{
		return $query->orderBy('released', $direction);
	}


	public function scopeBySortName($query, string $direction = 'asc')
	{
		return $query->orderBy('sort_name', $direction);
	}


	public function scopeByRating($query, string $direction = 'desc')
	{
		return $query->orderBy('rating', $direction);
	}

}
