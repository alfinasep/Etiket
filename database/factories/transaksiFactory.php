<?php

use Faker\Generator as Faker;

$factory->define(App\transaksi::class, function (Faker $faker) {
    return [
        'jadwal_id' => $faker->jadwal_id,
        'kursi_id' => $faker->kursi_id,
        'jumlah_tiket' => $faker->jumlah_tiket,
        'jumlah_harga' => $faker->jumlah_harga,
        'ticket_auth' => $faker->ticket_auth,
        'ticket_pass' => $faker->ticket_pass,
    ];
});
