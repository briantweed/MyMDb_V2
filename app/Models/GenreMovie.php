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

    /**
     * Name of the database table.
     *
     * @since version 1.0.0
     * @var string
     */
    protected $table = 'genre_movie';


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'genre_id',
        'movie_id'
    ];

}
