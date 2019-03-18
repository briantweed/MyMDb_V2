<?php

namespace App\Models;


class Studio extends BaseModel
{

    protected $fillable = [
        'name'
    ];


    public function movies()
    {
        return $this->hasMany(Movie::class);
    }


    public function scopeByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }


    public function getStudios($forget = false)
    {
        return $this->cacheAndReturn('id', 'name', $forget, 'name');
    }

}
