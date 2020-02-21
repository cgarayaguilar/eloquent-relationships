<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'instagram' => $faker->userName,
        'web' => $faker->url,
        'user_id' => rand(1, 5)
    ];
});
