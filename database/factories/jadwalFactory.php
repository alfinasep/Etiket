<?php

use Faker\Generator as Faker;

$factory->define(App\jadwal::class, function (Faker $faker) {
    return [
        'film_id' => $faker->film_id,
        'hari' => $faker->hari,
        'jam' => $faker->jam,
        'harga' => $faker->harga,
        'teater_id' => $faker->teater_id,
    ];
});
