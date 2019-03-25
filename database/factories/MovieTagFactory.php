<?php

use Faker\Generator as Faker;

use App\Models\{Movie, MovieTag, Tag};

$factory->define(MovieTag::class, function (Faker $faker) {
    return [
        'movie_id' => Movie::inRandomOrder()->first()->id,
        'tag_id' => Tag::inRandomOrder()->first()->id,
    ];
});
