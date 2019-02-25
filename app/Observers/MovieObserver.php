<?php

namespace App\Observers;

use App\Models\Movie;
use Illuminate\Support\Str;


class MovieObserver
{

    /**
     * Apply method when a new movie is being created
     * @param Movie $movie
     */
    public function creating(Movie $movie)
    {
        $movie->slug = Str::slug($movie->name);
        if(empty($movie->sort_name)) {
            $movie->sort_name = $movie->name;
        }
    }


    /**
     * Apply method when a movie is being updated
     * @param Movie $movie
     */
    public function updating(Movie $movie)
    {
        if($movie->isDirty('name')) {
            $movie->slug = Str::slug($movie->name);
        }
    }

}
