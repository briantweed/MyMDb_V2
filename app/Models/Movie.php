<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Traits\{FilterTrait, PositionTrait};
use App\Contracts\{FilterInterface, PositionInterface};


class Movie extends BaseModel implements FilterInterface, PositionInterface
{

	use FilterTrait;

	use PositionTrait;

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

    protected $dates = [
        'purchased'
    ];

    protected $casts = [
        'duplicate' => 'boolean'
    ];

    protected $searchable = [
        'name' => 'Title',
        'released' => 'Release Date',
        'rating' => 'Rating',
        'certificate_id' => 'Certificate'
    ];


    public function cast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->byForename();
    }


    public function mainCast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->areStars()
            ->byForename();
    }


    public function supportingCast()
    {
        return $this->belongsToMany(Person::class, 'cast')
            ->withPivot('id', 'character', 'star')
            ->areStars(false)
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
		return $this->belongsTo(Studio::class)->withDefault([
            'name' => '---'
        ]);
	}


	public function format()
	{
		return $this->belongsTo(Format::class)->withDefault([
            'type' => '---'
        ]);
	}


	public function certificate()
	{
		return $this->belongsTo(Certificate::class)->withDefault([
            'title' => '---'
        ]);
	}


	public function genres()
	{
		return $this->belongsToMany(Genre::class);
	}


    public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}


    public function getRunningTimeInMinutesAttribute()
    {
        return $this->running_time . 'mins';
    }


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


    public function getImagePathAttribute()
    {
        return URL::asset('/images/covers/' . $this->image);
    }


    public function getPurchasedAttribute($date)
    {
        return Carbon::parse($date)->format(config('app.date_display'));
        // return Carbon::createFromFormat(config('app.date_display'), $date)->format('jS F Y');

    }


    public function setPurchasedAttribute($date)
    {
        return $date->format(config('app.date_store'));
    }


    public function scopeWhereName($query, string $name)
    {
        return $query->where('name', 'like', '%'.$name.'%');
    }


    public function scopeWhereReleased($query, int $year)
    {
        return $query->where('released', $year);
    }


    public function scopeWhereRating($query, int $rating)
    {
        return $query->where('rating', $rating);
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
