<?php

use Faker\Generator as Faker;
use App\Models\{Genre, GenreMovie, Movie}
;

$factory->define(GenreMovie::class, function (Faker $faker) {
    return [
        'genre_id' => Genre::inRandomOrder()->first()->id,
        'movie_id' => Movie::inRandomOrder()->first()->id,
    ];
});
