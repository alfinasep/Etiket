<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable =  ['film_id','hari','jam','harga','teater_id'];
    protected $primaryKey = 'id_jadwal';

    public function film()
	{
		return $this->belongsTo('App\film','film_id');
	}

	public function teater()
	{
	return $this->belongsTo('App\teater','teater_id');
	}

	public function transaksi()
    {
		return $this->hasMany('App\transaksi','id_jadwal');
	}
}
