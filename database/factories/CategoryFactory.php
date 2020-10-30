<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'thumbnail'  => $faker->imageUrl($width = 640, $height = 480),
        'is_active' => config('constants.is_active')
    ];
});
