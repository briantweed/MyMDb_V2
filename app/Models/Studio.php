<?php

namespace App\Models;


class Studio extends BaseModel
{

    protected $fillable =[
        'name'
    ];


    public function movies()
    {
        return $this->hasMany(Movies::class);
    }


    public function scopeByName($query, $direction = 'asc')
    {
        return $query->orderBy('name', $direction);
    }


    public function getStudios()
    {
        return $this->byName()
            ->pluck('name', 'id')
            ->toArray();
    }

}
