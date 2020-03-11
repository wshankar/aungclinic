<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    $gender = $faker->randomElement($array = array('male','female'));
    return [
        'name' => $faker->name($gender),
        'age' => rand(1, 80),
        'sex' => $gender,
        'address' => $faker->address,
        // 'visits' => rand(0,20)
    ];
});
