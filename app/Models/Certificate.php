<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Certificate extends Model 
{

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }


    public function scopeById($query, string $direction = 'asc')
    {
        return $query->orderBy('id', $direction);
    }


    public function getCertificates()
    {
        return $this->byId()->pluck('title', 'id')->toArray();
    }

}
