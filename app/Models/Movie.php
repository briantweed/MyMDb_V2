<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Traits\PositionTrait;
use App\Contracts\{MovieInterface, PositionInterface};


class Movie extends BaseModel implements PositionInterface, MovieInterface
{

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
     * Relation - a movie can have many cast members
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->byForename();
    }


    /**
     * Relation - a movie can have many main cast member, where star equals true
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
     * Relation - a movie can have many other cast members, where star equals false
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
     * Relation - a movie can have many main crew members
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
     * Relation - a movie belongs to a studio
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function studio()
	{
		return $this->belongsTo(Studio::class)->withDefault([
            'name' => 'Unknown'
        ]);
	}


    /**
     * Relation - a movie exists on a certain format e.g. DVD, Blu-ray etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function format()
	{
		return $this->belongsTo(Format::class)->withDefault([
            'type' => 'Unknown'
        ]);
    }


    /**
     * Relation - a movie is given a certificate e.g. U, PG etc.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function certificate()
	{
		return $this->belongsTo(Certificate::class)->withDefault([
            'name' => 'Unknown'
        ]);
    }


    /**
     * Relation - a movie can belong to many types of genres
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
	public function genres()
	{
		return $this->belongsToMany(Genre::class);
	}


    /**
     * Relation - a movie can have many types of tags
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}


    /**
     * Accessor - get the model filters
     * @see $this->filters()
     * @return array
     */
    public function getFiltersAttribute()
    {
        return $this->filters();
    }


    /**
     * Accessor - get the movie ratings
     * @see $this->filters()
     * @return array
     */
    public function getRatingsAttribute()
    {
        return self::RATINGS;
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
     * Scope - return movies whose title is like the given name
     * @param $query
     * @param string $name
     * @return mixed
     */
    public function scopeWhereName($query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }


    /**
     * Scope - return movies released in the selected year
     * @param $query
     * @param int $year
     * @return mixed
     */
    public function scopeWhereReleased($query, int $year)
    {
        return $query->where('released', $year);
    }


    /**
     * Scope - return movies that match the selected rating
     * @param $query
     * @param int $rating
     * @return mixed
     */
    public function scopeWhereRating($query, int $rating)
    {
        return $query->where('rating', $rating);
    }


    /**
     * Scope - return movies that match the selected certificate
     * @param $query
     * @param int $certificate
     * @return mixed
     */
    public function scopeWhereCertificate($query, int $certificate)
    {
        return $query->where('certificate_id', $certificate);
    }


    /**
     * Scope - return movies that match the selected studio
     * @param $query
     * @param int $studio
     * @return mixed
     */
    public function scopeWhereStudio($query, int $studio)
    {
        return $query->where('studio_id', $studio);
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
     * Array of filters that can be applied to movie searches
     * @see config/building.php
     * @return array
     */
    public function filters()
    {
        return [
            config('building.field_group') =>
            [
                [
                    config('building.field_type')    => "text",
                    config('building.field_name')    => "name",
                    config('building.field_label')   => "Title",
                ],
                [
                    config('building.field_type')    => "text",
                    config('building.field_name')    => "released",
                    config('building.field_label')   => "Release Date",
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "rating",
                    config('building.field_label')   => "Rating",
                    config('building.field_options') => $this->ratings,
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "certificate",
                    config('building.field_label')   => "Certificate",
                    config('building.field_options') => (new Certificate)->getCertificates(),
                ],
                [
                    config('building.field_type')    => "select",
                    config('building.field_name')    => "studio",
                    config('building.field_label')   => "Studio",
                    config('building.field_options') => (new Studio)->getStudios(),
                ]
            ],
            config('building.button_group') =>
            [
                [
                    config('building.button_type')   => "clear",
                    config('building.button_text')   => "clear",
                    config('building.button_class')  => "btn-secondary mr-2",
                    config('building.button_route')  => "movies.index"
                ],
                [
                    config('building.button_type')   => "submit",
                    config('building.button_text')   => "submit",
                    config('building.button_class')  => "btn-success",
                ]
            ]
        ];
    }

}
