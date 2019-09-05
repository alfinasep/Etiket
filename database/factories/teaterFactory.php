<?php

use Faker\Generator as Faker;

$factory->define(App\teater::class, function (Faker $faker) {
    return [
        'nama_teater' => $faker->nama_teater,
    ];
});
