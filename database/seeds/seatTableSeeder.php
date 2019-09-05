<?php

use Illuminate\Database\Seeder;

class seatTableSeeder extends Seeder
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
        \App\seat::truncate(); 
        
        $se = [
		
		['nama_seat'=>'regular', 'teater_id'=>'1'],
		['nama_seat'=>'sweetbox', 'teater_id'=>'2']
		];
		
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
