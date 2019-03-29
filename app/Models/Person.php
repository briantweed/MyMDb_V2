<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\{DB, URL};

use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


/**
 * Class Person.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Person  extends BaseModel implements PositionInterface
{

	use PositionTrait;


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
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


    /**
     * Fields cast to instances of Carbon.
     *
     * @since version 1.0.0
     * @var array
     */
	protected $dates = [
		'birthday',
		'deceased'
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
     * Relation - a person can have many roles.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
	{
		return $this->belongsToMany(Movie::class, 'cast', 'person_id', 'movie_id')
			->withPivot('id', 'character')
            ->bySortName();
	}


    /**
     * Relation - a person can have many positions.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function positions(): BelongsToMany
	{
		return $this->belongsToMany(Movie::class, 'crew', 'person_id', 'movie_id')
			->withPivot('id', 'position')
			->bySortname()
			->byPosition()
			->orderBy('name', 'asc');
	}


    /**
     * Relation - a person can have directed many movies.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function directed(): BelongsToMany
	{
		return $this->getPosition(self::DIRECTOR);
	}


    /**
     * Relation - a person can have produced many movies.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function produced(): BelongsToMany
	{
		return $this->getPosition(self::PRODUCER);
	}


    /**
     * Relation - a person can have wrote many movies.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function wrote(): BelongsToMany
	{
		return $this->getPosition(self::WRITER);
	}


    /**
     * Relation - a person can have scored many movies.
     *
     * @since version 1.0.0
     * @return BelongsToMany
     */
	public function scored(): BelongsToMany
	{
		return $this->getPosition(self::COMPOSER);
	}


    /**
     * Accessor - get the full name of the person.
     *
     * @since version 1.0.0
     * @return string
     */
	public function getFullnameAttribute(): string
	{
		return $this->forename . ' ' . $this->surname;
	}


    /**
     * Accessor - get the age of the person.
     *
     * @since version 1.0.0
     * @return string
     */
	public function getAgeAttribute(): string
	{
	    if($this->birthday !== NULL) {
		    $date = $this->deceased ?? Carbon::now();
		    return $date->diffInYears($this->birthday);
        }
	    return '---';
	}


    /**
     * Accessor - get the formatted birthday of the person.
     *
     * @since version 1.0.0
     * @return string|null
     */
	public function getBornAttribute(): ?string
	{
	    if($this->birthday !== NULL)
        {
		    return $this->birthday->format('jS F Y');
        }
	    return null;
	}


    /**
     * Accessor - get the date the person died on.
     *
     * @since version 1.0.0
     * @return string|null
     */
	public function getDiedAttribute(): ?string
	{
	    if($this->deceased !== NULL)
        {
		    return $this->deceased->format('jS F Y');
        }
	    return null;
	}


    /**
     * Accessor - get the image of the person.
     *
     * @since version 1.0.0
     * @return string
     */
    public function getImagePathAttribute(): string
    {
        return URL::asset('/images/people/' . $this->image);
    }


    /**
     * Accessor - get the image of a movie the person worked on.
     *
     * @since version 1.0.0
     * @return string
     */
    public function getBannerImagePathAttribute(): string
    {
        $movie = count($this->roles) ? $this->roles->random() : $this->positions->random();
        return URL::asset('/images/covers/' . $movie->image);
    }


    /**
     * Accessor - find any movies in the person's bio that have been
     * wrapped in double curly brackets. Replace it with a
     * link if the movie exists in the database.
     *
     * @since version 1.0.0
     * @return string
     */
    public function getBioWithLinksAttribute(): string
    {
        return nl2br( preg_replace_callback('/\{{(.*?)}}/', function($m)
        {
            $crumbs = explode("(", $m[1]);
            $movieName = trim($crumbs[0]);

            $query = Movie::whereName($movieName);

            if (isset($crumbs[1])) {
                $releaseYear = rtrim($crumbs[1], ")");
                if (is_integer($releaseYear)) {
                    $query->whereReleased($releaseYear);
                }
            }

            $movie = $query->first();

            if ($movie) {
                return "<a href='/movies/".$movie->slug."'><b>".$movie->name." (".$movie->released.")</b></a>";
            }
            else {
                return $m[1];
            }
        }, $this->bio));
    }


    /**
     * Scope - return people whose full name is like the given name.
     *
     * @param $query
     * @param $name
     * @return Builder
     */
	public function scopeWhereFullname($query, $name): Builder
    {
        return $query->where(DB::raw("CONCAT(`forename`, ' ', `surname`)"), 'LIKE', '%' . $name . '%');
    }


    /**
     * Scope - return people who are listed as stars of the movie.
     *
     * @param $query
     * @param bool $bool
     * @return Builder
     */
	public function scopeAreStars(Builder $query, bool $bool = true): Builder
    {
        return $query->where('star', $bool);
    }


    /**
     * Scope - sort people by those listed as stars.
     *
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByStar(Builder $query, string $direction = 'desc'): Builder
    {
        return $query->orderBy('star', $direction);
    }


    /**
     * Scope - sort people by forename.
     *
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeByForename(Builder $query, string $direction = 'asc'): Builder
	{
		return $query->orderBy('forename', $direction);
	}


    /**
     * Scope - sort people by surname.
     *
     * @param $query
     * @param string $direction
     * @return Builder
     */
    public function scopeBySurname(Builder$query, string $direction = 'asc'): Builder
	{
		return $query->orderBy('surname', $direction);
	}


    /**
     * Return an array of all the people.
     *
     * @return array
     */
    public function getPeople(): array
    {
        return $this->byId()
            ->pluck('forename', 'id')
            ->toArray();
    }

}
