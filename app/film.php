<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = 'film';
    protected $fillable =  ['judul_film','deskripsi_film','rating_film','produsen_film','durasi_film'];
    protected $primaryKey = 'id';

    public function jadwal()
	{
   	return $this->hasMany('App\jadwal','id');
	}
	public function transaksi()
	{
   	return $this->hasMany('App\transaksi','id');
	}
}
