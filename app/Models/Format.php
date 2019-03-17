<?php

namespace App\Models;


class Format extends BaseModel
{

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }


    public function scopeByType($query, $direction = 'asc')
    {
        return $query->orderBy('type', $direction);
    }


    public function getFormats($forget = false)
    {
        return $this->cacheAndReturn('id', 'type', $forget);
    }

}
