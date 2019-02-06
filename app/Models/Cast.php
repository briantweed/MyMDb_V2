<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cast extends Model 
{

    protected $table = 'cast';

    protected $fillable = [
        'movie_id',
        'character',
        'star'
    ];

    protected $casts = [
        'star' => 'boolean'
    ];

}
