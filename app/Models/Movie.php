<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Support\Facades\{Cache, DB, URL};
use Illuminate\Database\Eloquent\Relations\{BelongsTo, BelongsToMany};

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
     * Fields that can be mass assigned.
     *
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
     * Fields cast to instances of Carbon.
     *
     * @var array
     */
    protected $dates = [
        'purchased'
    ];


    /**
     * Fields cast to given type.
     *
     * @var array
     */
    protected $casts = [
        'duplicate' => 'boolean'
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
     * Relation - a movie can have many cast members.
     *
     * @return BelongsToMany
     */
    public function cast(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->orderBy('star','desc')
            ->byForename();
    }


    /**
     * Relation - a movie can have many main crew members.
     *
     * @return BelongsToMany
     */
    public function crew(): BelongsToMany
    {
        return $this->belongsToMany(Person::class, 'crew')
            ->withPivot('id', 'position')
            ->byPosition()
            ->byForename();
    }


    /**
     * Relation - a movie belongs to a studio
     * @return BelongsTo
     */
	public function studio(): BelongsTo
	{
		return $this->belongsTo(Studio::class)->withDefault([
            'name' => 'Unknown'
        ]);
	}


    /**
     * Relation - a movie exists on a certain format e.g. DVD, Blu-ray etc.
     *
     * @return BelongsTo
     */
	public function format(): BelongsTo
	{
		return $this->belongsTo(Format::class)->withDefault([
            'type' => 'Unknown'
        ]);
    }


    /**
     * Relation - a movie is given a certificate e.g. U, PG etc.
     *
     * @return BelongsTo
     */
	public function certificate(): BelongsTo
	{
		return $this->belongsTo(Certificate::class)->withDefault([
            'name' => 'Unknown'
        ]);
    }


    /**
     * Relation - a movie can belong to many types of genres.
     *
     * @return BelongsToMany
     */
	public function genres(): BelongsToMany
	{
		return $this->belongsToMany(Genre::class);
	}


    /**
     * Relation - a movie can have many types of tags.
     *
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}


    /**
     * Accessor - get the movie ratings.
     *
     * @return array
     */
    public function getRatingsAttribute(): array
    {
        return Cache::rememberForever('ratings', function() {
            return self::RATINGS;
        });
    }


    /**
     * Accessor - display rating as star icons.
     *
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
     * Accessor - display running time in minutes.
     *
     * @return string
     */
    public function getRunningTimeInMinutesAttribute(): string
    {
        return $this->running_time . 'mins';
    }


    /**
     * Accessor - display running time in hours and minutes.
     *
     * @return string
     */
    public function getRunningTimeInHoursAttribute(): string
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
     * Accessor - return the path of the movie cover image.
     *
     * @return string
     */
    public function getImagePathAttribute(): string
    {
        return URL::asset('/images/covers/' . $this->image);
    }


    /**
     * Accessor - display the purchased date in the selected format.
     *
     * @see config/app.php
     * @param $date
     * @return string
     */
    public function getPurchasedAttribute(Carbon $date): string
    {
        return Carbon::parse($date)->format(config('app.date_display'));
        // return Carbon::createFromFormat(config('app.date_display'), $date)->format('jS F Y');
    }


    /**
     * Mutator - format date for database storage.
     *
     * @param $date
     * @return mixed
     */
    public function setPurchasedAttribute(Carbon $date)
    {
        return $date->format(config('app.date_store'));
    }


    /**
     * Scope - return movies whose title is like the given name.
     *
     * @param $query
     * @param string $name
     * @return mixed
     */
    public function scopeWhereName($query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }


    /**
     * Scope - return movies where the search string matches one of the fields listed.
     *
     * @param $query
     * @param string $name
     * @return mixed
     */
    public function scopeWhereSearch($query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%')
            ->orWhereHas('cast', function($q) use ($name) {
                $q->where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%' . $name . '%');
            })
            ->orWhereHas('crew', function($q) use ($name) {
                $q->where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%' . $name . '%');
            });
    }


    /**
     * Scope - return movies whose title is like the given name.
     *
     * @param $query
     * @param string $name
     * @return mixed
     */
    public function scopeWhereStarts($query, string $name)
    {
        return $query->where('name', 'regexp', '^[' . $name .']+');
    }


    /**
     * Scope - return movies released in the selected year.
     *
     * @param $query
     * @param int $year
     * @return mixed
     */
    public function scopeWhereReleased($query, int $year)
    {
        return $query->where('released', $year);
    }


    /**
     * Scope - return movies that match the selected rating.
     *
     * @param $query
     * @param int $rating
     * @return mixed
     */
    public function scopeWhereRating($query, int $rating)
    {
        return $query->where('rating', $rating);
    }


    /**
     * Scope - return movies that match the selected certificate.
     *
     * @param $query
     * @param int $certificate
     * @return mixed
     */
    public function scopeWhereCertificateId($query, int $certificate)
    {
        return $query->where('certificate_id', $certificate);
    }


    /**
     * Scope - return movies that match the selected studio.
     *
     * @param $query
     * @param int $studio
     * @return mixed
     */
    public function scopeWhereStudioId($query, int $studio)
    {
        return $query->where('studio_id', $studio);
    }


    /**
     * Scope - return movies that match the selected format.
     *
     * @param $query
     * @param int $format
     * @return mixed
     */
    public function scopeWhereFormatId($query, int $format)
    {
        return $query->where('format_id', $format);
    }


    /**
     * Scope - sort movies by release date.
     *
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeByReleaseDate($query, string $direction = 'desc')
	{
		return $query->orderBy('released', $direction);
	}


    /**
     * Scope - sort movies by sort name.
     *
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeBySortName($query, string $direction = 'asc')
	{
		return $query->orderBy('sort_name', $direction);
	}


    /**
     * Scope - sort movies by rating.
     *
     * @param $query
     * @param string $direction
     * @return mixed
     */
	public function scopeByRating($query, string $direction = 'desc')
	{
		return $query->orderBy('rating', $direction);
	}


    /**
     * Group movies by the first letter of their title.
     *
     * @return mixed
     */
	public static function groupByFirstLetter()
    {
        return array_keys(Movie::all()->sortBy('name')->groupBy(function ($item, $key) {
            return !is_numeric(substr($item['name'], 0, 1)) ? substr($item['name'], 0, 1) : '0-9';
        })->toArray());
    }


    /**
     * Check to see if this movie is Spinal Tap.
     * If so, turn it up to eleven!
     *
     * @return int|mixed
     */
	private function isThisSpinalTap(): int
    {
        return $this->name === 'This is Spinal Tap' ? 11 : $this->rating;
    }

}
