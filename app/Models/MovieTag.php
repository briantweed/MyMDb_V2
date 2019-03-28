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

    protected $table = 'movie_tag';

    protected $fillable = [
        'movie_id',
        'tag_id'
    ];

}
