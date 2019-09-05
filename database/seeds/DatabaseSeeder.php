<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(filmTableSeeder::class);
        $this->call(jadwalTableSeeder::class);
        $this->call(seatTableSeeder::class);
        $this->call(teaterTableSeeder::class);
        $this->call(transaksiTableSeeder::class);
    }
}
