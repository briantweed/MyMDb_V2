<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use App\Http\Traits\{FilterTrait, PositionTrait};
use App\Contracts\{FilterInterface, PositionInterface, MovieInterface};


class Movie extends Model implements FilterInterface, PositionInterface, MovieInterface
{

	use FilterTrait;

	use PositionTrait;


    /**
     * Fields that can be mass assigned
     * @var array
     */
	protected $fillable = [
		'name',
		'sort_name',
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


    /**
     * Fields cast to instances of Carbon
     * @var array
     */
    protected $dates = [
        'purchased'
    ];


    /**
     * Fields cast to given type
     * @var array
     */
    protected $casts = [
        'duplicate' => 'boolean'
    ];


    /**
     * Relationship - a movie can have many cast members
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->byForename();
    }


    /**
     * Relationship - a movie can have many main cast member, where star equals true
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mainCast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->areStars()
            ->byForename();
    }


    /**
     * Relationship - a movie can have many other cast members, where star equals false
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function supportingCast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->areStars(false)
            ->byForename();
    }


    /**
     * Relationship - a movie can have many main crew members
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function crew()
    {
        return $this->belongsToMany(Person::class, 'crew')
            ->withPivot('id', 'position')
            ->byPosition()
            ->byForename();
    }


    /**
     * Relationship - a movie belongs to a studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function studio()
	{
		return $this->belongsTo(Studio::class);
	}


    /**
     * Relationship - a movie exists on a certain format e.g. DVD, Blu-ray etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function format()
	{
		return $this->belongsTo(Format::class);
	}


    /**
     * Relationship - a movie is given a certificate e.g. U, PG etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function certificate()
	{
		return $this->belongsTo(Certificate::class);
	}


    /**
     * Relationship - a movie can belong to many types of genres
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function genres()
	{
		return $this->belongsToMany(Genre::class);
	}

    /**
     * Relationship - a movie can have many types of tags
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}


    /**
     * Accessor - display running time in minutes
     * @return string
     */
    public function getRunningTimeInMinutesAttribute()
    {
        return $this->running_time . 'mins';
    }


    /**
     * Accessor - get the model filers
     * @see $this->filters()
     * @return string
     */
    public function getFiltersAttribute()
    {
        return $this->filters();
    }


    /**
     * Accessor - display running time in hours and minutes
     * @return string
     */
    public function getRunningTimeInHoursAttribute()
    {
        if($this->running_time < 60)
        {
            return $this->running_time . 'mins';
        }
        else {
            $hours = floor($this->running_time / 60);
            return $hours . 'hr' . ($hours == 1 ? ' ' : 's ') . str_pad(($this->running_time % 60), 2, "0", STR_PAD_LEFT) . 'mins';
        }
    }


    /**
     * Accessor - return the path of the movie cover image
     * @return string
     */
    public function getImagePathAttribute()
    {
        return URL::asset('/images/covers/' . $this->image);
    }


    /**
     * Accessor - display the purchased date in the selected format
     * @see config/app.php
     * @param $date
     * @return string
     */
    public function getPurchasedAttribute($date)
    {
        return Carbon::parse($date)->format(config('app.date_display'));
        // return Carbon::createFromFormat(config('app.date_display'), $date)->format('jS F Y');
    }


    /**
     * Mutator - format date for database storage
     * @param $date
     * @return mixed
     */
    public function setPurchasedAttribute($date)
    {
        return $date->format(config('app.date_store'));
    }


    /**
     * Scope - return movies whose title is like the given string
     * @param $query
     * @param string $name
     * @return mixed
     */
    public function scopeWhereName($query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }


    /**
     * Scope - return movies released in the given year
     * @param $query
     * @param int $year
     * @return mixed
     */
    public function scopeWhereReleased($query, int $year)
    {
        return $query->where('released', $year);
    }


    /**
     * Scope - return movies with match the given rating
     * @param $query
     * @param int $rating
     * @return mixed
     */
    public function scopeWhereRating($query, int $rating)
    {
        return $query->where('rating', $rating);
    }


    /**
     * Scope - sort movies by release date
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeByReleaseDate($query, string $direction = 'desc')
	{
		return $query->orderBy('released', $direction);
	}


    /**
     * Scope - sort movies by sort name
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeBySortName($query, string $direction = 'asc')
	{
		return $query->orderBy('sort_name', $direction);
	}


    /**
     * Scope - sort movies by rating
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeByRating($query, string $direction = 'desc')
	{
		return $query->orderBy('rating', $direction);
	}


    /**
     * Array of filters that can be applied to movie
     * @return array
     */
    private function filters()
    {
        return [
            "fields" => [
                [
                    "label"   => "Title",
                    "field"   => "name",
                    "type"    => "text",
                ],
                [
                    "label"   => "Release Date",
                    "field"   => "released",
                    "type"    => "text"
                ],
                [
                    "label"   => "Rating",
                    "field"   => "rating",
                    "type"    => "select",
                    "options" => self::RATINGS
                ],
                [
                    "label"   => "Certificate",
                    "field"   => "certificate_id",
                    "type"    => "select",
                    "options" => (new Certificate)->getCertificates()
                ]
            ]
        ];
    }

}
