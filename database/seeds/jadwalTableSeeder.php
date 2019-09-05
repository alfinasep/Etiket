<?php

use Illuminate\Database\Seeder;

class jadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\jadwal::truncate(); 

        $ja = [
		
		['film_id'=>'1', 'hari'=>'Senin', 'jam'=>'12.00', 'harga'=>'40.000', 'teater_id'=>'1'],
		['film_id'=>'2', 'hari'=>'Senin', 'jam'=>'12.00', 'harga'=>'40.000', 'teater_id'=>'2']
		];
	   
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
