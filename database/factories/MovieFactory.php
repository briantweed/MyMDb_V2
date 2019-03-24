<?php

use Faker\Generator as Faker;
use App\Models\{Certificate, Format, Studio, Movie};
use Illuminate\Support\Str;


$factory->define(Movie::class, function (Faker $faker) {

    $movie = new Movie;
    $name = $faker->words($faker->numberBetween(1,5), true);

    return [
        'name' => ucwords($name),
        'slug' => Str::slug($name),
        'sort_name' => $name,
        'imdb_id' => 'tt' . $faker->numberBetween(100000,999999),
        'released' => $faker->year($max = 'now'),
        'rating' => $movie::RATINGS[array_rand($movie::RATINGS)],
        'running_time' => $faker->numberBetween(90,150),
        'image' => 'poster.jpg',
        'certificate_id' => Certificate::inRandomOrder()->first()->id,
        'format_id' => Format::inRandomOrder()->first()->id,
        'studio_id' => Studio::inRandomOrder()->first()->id,
        'duplicate' => 0,
        'bio' => $faker->paragraph(),
        'purchased' => $faker->dateTimeBetween('-20 years', 'now')->format('Y-m-d H:i:s')
    ];

});
