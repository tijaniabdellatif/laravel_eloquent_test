<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        
        "id_user" => rand(1,100),
        'adress'=> $faker->address,
        "gender" => $faker->randomElement(['male','female'])
    ];
});
