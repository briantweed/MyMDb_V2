<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Cast.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
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
