<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Treatment::class, function (Faker $faker) {
    return [
        'treatment' => $faker->paragraphs(rand(2,5), true),
        'fees' => rand(2000, 10000),
    ];
});
