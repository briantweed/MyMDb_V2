<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class GenreMovie.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class GenreMovie extends Model
{

    protected $table = 'genre_movie';

    protected $fillable = [
        'genre_id',
        'movie_id'
    ];

}
