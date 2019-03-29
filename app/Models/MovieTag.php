<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class MovieTag.
 *
 * @package App\Models
 * @version 1.0.0
 * @author briantweed
 */
class MovieTag extends Model
{

    /**
     * Name of the database table.
     *
     * @since version 1.0.0
     * @var string
     */
    protected $table = 'movie_tag';


    /**
     * Fields that can be mass assigned.
     *
     * @since version 1.0.0
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'tag_id'
    ];

}
