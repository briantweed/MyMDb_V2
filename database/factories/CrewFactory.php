<?php

use Faker\Generator as Faker;
use App\Models\{Crew, Movie, Person};


$factory->define(Crew::class, function (Faker $faker) {
    return [
        'movie_id' => Movie::inRandomOrder()->first()->id,
        'person_id' => Person::inRandomOrder()->first()->id,
        'position' => $faker->randomElement(Movie::CREW_POSITIONS),
    ];
});