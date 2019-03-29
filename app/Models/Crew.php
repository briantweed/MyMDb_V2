<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Crew
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class Crew extends Model 
{

    /**
     * Name of the database table.
     *
     * @since version 1.0.0
     * @var string
     */
    protected $table = 'crew';


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = array(
        'movie_id',
        'person_id',
        'position'
    );

}
