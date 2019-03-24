<?php

use Faker\Generator as Faker;
use App\Models\Person;
use Illuminate\Support\Str;


$factory->define(Person::class, function (Faker $faker) {

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;

    return [
        'forename' => $firstName,
        'surname' => $lastName,
        'slug' => Str::slug($firstName . ' ' . $lastName),
        'birthday' => $faker->dateTimeBetween('-75 years', '-20 years')->format('Y-m-d H:i:s'),
        'deceased' => random_int(1, 10) === 10 ? $faker->dateTimeBetween('-3 years', 'now')->format('Y-m-d H:i:s') : null,
        'imdb_id' => 'nm' . $faker->numberBetween(100000,999999),
        'image' => 'headshot.jpg',
        'bio' => $faker->paragraph(),
    ];

});
