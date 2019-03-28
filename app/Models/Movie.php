<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\{DB, File, URL};
use Illuminate\Database\Eloquent\Relations\{BelongsToMany};

use App\Http\Traits\PositionTrait;
use App\Contracts\{MovieInterface, PositionInterface};


/**
 * Class Movie.
 *
 * @package App\Models
 * @version 1.0.5
 * @author briantweed
 */
class Movie extends BaseModel implements PositionInterface, MovieInterface
{

	use PositionTrait;


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
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
     * @since version 1.0.0
     * @var array
     */
    protected $dates = [
        'purchased'
    ];


    /**
     * Fields cast to given type.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $casts = [
        'duplicate' => 'boolean'
    ];


    /**
     * Set the route lookup field key.
     *
     * @since version 1.0.0
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    /**
     * Relation - a movie can have many cast members.
     *
     * @since version 1.0.0
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
     * Relation - a movie can have many crew members.
     *
     * @since version 1.0.0
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
     * Relation - a movie belongs to a studio.
     *
     * @internal The cache will return an array but phpunit testing will return the object.
     * @since version 1.0.0
     * @return array
     */
	public function studio()
	{
        return Cache::rememberForever('studios', function() {
            return $this->belongsTo(Studio::class)->withDefault([
                'name' => 'Unknown'
            ])->byName();
        });
	}


    /**
     * Relation - a movie exists on a certain format.
     *
     * @internal The cache will return an array but phpunit testing will return the object.
     * @since version 1.0.0
     * @return array
     */
	public function format()
	{
        return Cache::rememberForever('formats', function() {
            return $this->belongsTo(Format::class)->withDefault([
                'type' => 'Unknown'
            ]);
        });
    }


    /**
     * Relation - a movie is given a certificate.
     *
     * @internal The cache will return an array but phpunit testing will return the object.
     * @since version 1.0.0
     * @return array
     */
	public function certificate()
	{
        return Cache::rememberForever('certificates', function() {
            return $this->belongsTo(Certificate::class)->withDefault([
                'name' => 'Unknown'
            ]);
        });
    }


    /**
     * Relation - a movie can belong to many types of genres.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function genres(): BelongsToMany
	{
		return $this->belongsToMany(Genre::class);
	}


    /**
     * Relation - a movie can have many types of tags.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}


    /**
     * Accessor - get the movie ratings.
     *
     * @since version 1.0.0
     * @return array
     */
    public function getRatingsAttribute(): array
    {
        return self::RATINGS;
    }


    /**
     * Accessor - display rating as star icons.
     *
     * @since version 1.0.2
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
     * @since version 1.0.1
     * @return string
     */
    public function getRunningTimeInMinutesAttribute(): string
    {
        return $this->running_time . 'mins';
    }


    /**
     * Accessor - display running time in hours and minutes.
     *
     * @since version 1.0.1
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
     * Accessor - return the path of the movie poster image.
     *
     * @since version 1.0.1
     * @return string
     */
    public function getImagePathAttribute(): string
    {
        $imagePath = self::DEFAULT_POSTER;
        if(!empty($this->image) && File::exists(public_path() . Movie::POSTER_PATH . $this->image))
        {
            $imagePath =  URL::asset(self::POSTER_PATH . $this->image);
        }
        return $imagePath;
    }


    /**
     * Accessor - display the purchased date in the selected format.
     *
     * @since version 1.0.1
     * @see config/app.php
     * @param $date
     * @return string
     */
    public function getPurchasedAttribute(string $date): string
    {
        return Carbon::parse($date)->format(config('app.date_display'));
        // return Carbon::createFromFormat(config('app.date_display'), $date)->format('jS F Y');
    }


    /**
     * Scope - return movies whose title is like the given name.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param string $name
     * @return Builder
     */
    public function scopeWhereName(Builder $query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }


    /**
     * Scope - return movies where the search string matches one of the fields listed.
     *
     * @since version 1.0.4
     * @param Builder $query
     * @param string $name
     * @return Builder
     */
    public function scopeWhereSearch(Builder $query, string $name)
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
     * @since version 1.0.4
     * @param Builder $query
     * @param string $name
     * @return Builder
     */
    public function scopeWhereStarts(Builder $query, string $name)
    {
        return $query->where('name', 'regexp', '^[' . $name .']+');
    }


    /**
     * Scope - return movies released in the selected year.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param int $year
     * @return Builder
     */
    public function scopeWhereReleased(Builder $query, int $year)
    {
        return $query->where('released', $year);
    }


    /**
     * Scope - return movies that match the selected rating.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param int $rating
     * @return Builder
     */
    public function scopeWhereRating(Builder $query, int $rating)
    {
        return $query->where('rating', $rating);
    }


    /**
     * Scope - return movies that match the selected certificate.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param int $certificate
     * @return Builder
     */
    public function scopeWhereCertificateId(Builder $query, int $certificate)
    {
        return $query->where('certificate_id', $certificate);
    }


    /**
     * Scope - return movies that match the selected studio.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param int $studio
     * @return Builder
     */
    public function scopeWhereStudioId(Builder $query, int $studio)
    {
        return $query->where('studio_id', $studio);
    }


    /**
     * Scope - return movies that match the selected format.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param int $format
     * @return Builder
     */
    public function scopeWhereFormatId(Builder $query, int $format)
    {
        return $query->where('format_id', $format);
    }


    /**
     * Scope - sort movies by release date.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param string $direction
     * @return Builder
     */
	public function scopeByReleaseDate(Builder $query, string $direction = 'desc')
	{
		return $query->orderBy('released', $direction);
	}


    /**
     * Scope - sort movies by sort name.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param string $direction
     * @return Builder
     */
	public function scopeBySortName(Builder $query, string $direction = 'asc')
	{
		return $query->orderBy('sort_name', $direction);
	}


    /**
     * Scope - sort movies by rating.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param string $direction
     * @return Builder
     */
	public function scopeByRating(Builder $query, string $direction = 'desc')
	{
		return $query->orderBy('rating', $direction);
	}


    /**
     * Scope - sort movies by relase year.
     *
     * @since version 1.0.0
     * @param Builder $query
     * @param string $direction
     * @return Builder
     */
	public function scopeByReleased(Builder $query, string $direction = 'asc')
	{
		return $query->orderBy('released', $direction);
	}


    /**
     * Group movies by the first letter of their title.
     *
     * @since version 1.0.4
     * @return array
     */
	public static function groupByFirstLetter(): array
    {
        return array_keys(Movie::all()->sortBy('name')->groupBy(function ($item, $key) {
            return !is_numeric(substr($item['name'], 0, 1)) ? substr($item['name'], 0, 1) : '0-9';
        })->toArray());
    }


    /**
     * Check to see if this movie is Spinal Tap.
     * If so, turn it up to eleven!
     *
     * @since version 1.0.2
     * @return int
     */
	private function isThisSpinalTap(): int
    {
        return $this->name === 'This is Spinal Tap' ? 11 : $this->rating;
    }

}
