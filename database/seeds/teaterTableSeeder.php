<?php

use Illuminate\Database\Seeder;

class teaterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $te = [
		
		['nama_teater'=>'xxi'],
		['nama_teater'=>'cgv']
		];
		DB::table('teater')->insert($te);
    }
}
