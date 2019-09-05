<?php

use Faker\Generator as Faker;

$factory->define(App\film::class, function (Faker $faker) {
    return [
        'judul_film' => $faker->judul_film,
        'deskripsi_film' => $faker->deskripsi_film,
        'rating_film' => $faker->rating_film,
        'produsen_film' => $faker->produsen_film,
        'durasi_film' => $faker->durasi_film,
    ];
});
