<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MovieTag extends Model
{

    protected $table = 'movie_tag';

    protected $fillable = [
        'movie_id',
        'tag_id'
    ];

}
