<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph(5, true),
        'id_user' => rand(1, 100),

    ];
});
