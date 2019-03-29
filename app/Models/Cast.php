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

    /**
     * Name of the database table.
     *
     * @since version 1.0.0
     * @var string
     */
    protected $table = 'cast';


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'character',
        'star'
    ];


    /**
     * Fields cast to instances of Carbon.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $casts = [
        'star' => 'boolean'
    ];

}
