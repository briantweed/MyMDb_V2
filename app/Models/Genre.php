<?php

namespace App\Models;


class Genre extends BaseModel
{
    
    protected $fillable = [
        'type'
    ];


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function getGenres($forget = false): array
    {
        return $this->cacheAndReturn('id', 'type', $forget);
    }

}
