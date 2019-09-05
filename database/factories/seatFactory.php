<?php

use Faker\Generator as Faker;

$factory->define(App\seat::class, function (Faker $faker) {
    return [
        'nama_seat' => $faker->nama_seat,
        'teater_id' => $faker->teater_id,
    ];
});
