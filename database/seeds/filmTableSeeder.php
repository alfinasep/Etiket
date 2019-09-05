<?php

use Illuminate\Database\Seeder;

class filmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fi = [
		
		['judul_film'=>'Pokemon', 'deskripsi_film'=>'Ikuti petualangan pikatchu', 'rating_film'=>'78', 'produsen_film'=>'Wb Studios', 'durasi_film'=>'126'],
		['judul_film'=>'Spider-Man', 'deskripsi_film'=>'Ikuti petualangan peter', 'rating_film'=>'89', 'produsen_film'=>'Marvel Studios', 'durasi_film'=>'135']
		];
		DB::table('film')->insert($fi);
    }
}
