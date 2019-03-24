<?php

use Faker\Generator as Faker;
use App\Models\{Cast, Movie, Person};


$factory->define(Cast::class, function (Faker $faker) {
    return [
        'movie_id' => Movie::inRandomOrder()->first()->id,
        'person_id' => Person::inRandomOrder()->first()->id,
        'character' => $faker->name(),
        'star' => $faker->boolean(25)
    ];
});
