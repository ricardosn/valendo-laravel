<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'subtitle' => $faker->sentence,
        'series' => $faker->name,
        'isbn_10' => $faker->isbn10,
        'isbn_13' => $faker->isbn13,
        'edition' => $faker->randomDigit,
        'year' => $faker->year,
        'page_number' => $faker->randomNumber,
        'synopsis' => $faker->paragraph,
    ];
});
