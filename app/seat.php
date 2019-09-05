<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    protected $table = 'seat';
    protected $fillable =  ['nama_seat','teater_id'];
    protected $primaryKey = 'id';

    public function teater()
	{
		return $this->belongsTo('App\teater','teater_id');
	}

	public function transaksi()
    {
	return $this->hasMany('App\transaksi','id');
	}
}
