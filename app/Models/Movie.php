<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;

use App\Http\Traits\PositionTrait;
use App\Contracts\PositionInterface;


class Movie extends Model implements PositionInterface
{

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



    public function getRunningTimeAttribute($value)
    {
        return $value . ' mins';
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
