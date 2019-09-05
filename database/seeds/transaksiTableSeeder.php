<?php

use Illuminate\Database\Seeder;

class transaksiTableSeeder extends Seeder
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
        \App\transaksi::truncate(); 

        $tra = [
		
		['jadwal_id'=>'1', 'kursi_id'=>'1', 'jumlah_tiket'=>'2', 'jumlah_harga'=>'80', 'ticket_auth'=>'1234', 'ticket_pass'=>'126'],
		['jadwal_id'=>'2', 'kursi_id'=>'2', 'jumlah_tiket'=>'2', 'jumlah_harga'=>'80', 'ticket_auth'=>'4321', 'ticket_pass'=>'135']
		];
        
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
