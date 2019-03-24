<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {

    $name = $faker->name;

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'sort_name' => '',
        'imdb_id' => '',
        'released' => '',
        'rating' => '',
        'running_time' => '',
        'image' => '',
        'certificate' => '',
        'format_id' => '',
        'studio_id' => '',
        'duplicate' => '',
        'bio' => '',
        'purchased' => '',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
