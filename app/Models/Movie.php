<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Traits\PositionTrait;
use App\Contracts\{MovieInterface, PositionInterface};


/**
 * Class Movie
 * @package App\Models
 */
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
    public function getFiltersAttribute(): array
    {
        return $this->filters();
    }


    /**
     * Accessor - get the movie ratings
     * @see $this->filters()
     * @return array
     */
    public function getRatingsAttribute(): array
    {
        return self::RATINGS;
    }


    /**
     * Accessor - display rating as star icons
     * @return string
     */
    public function getStarRatingAttribute(): string
    {
        $starRating = '';
        for($i = 0; $i < $this->isThisSpinalTap(); $i++)
        {
            $starRating .= self::STAR_ICON;
        }
        return $starRating;
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
     * Scope - return movies that match the selected format
     * @param $query
     * @param int $format
     * @return mixed
     */
    public function scopeWhereFormat($query, int $format)
    {
        return $query->where('format_id', $format);
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
     * Check to see if this movie is Spinal Tap
     * If so, turn it up to eleven!
     * @return int|mixed
     */
	private function isThisSpinalTap(): int
    {
        return $this->name === 'This is Spinal Tap' ? 11 : $this->rating;
    }

}
