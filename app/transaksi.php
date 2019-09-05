<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable =  ['jadwal_id','kursi_id','jumlah_tiket','jumlah_harga','ticket_auth','ticket_pass'];
    protected $primaryKey = 'id';

    public function seat()
	{
	return $this->belongsTo('App\seat','kursi_id');
	}

	public function film()
	{
	return $this->belongsTo('App\jadwal','jadwal_id');
	}
}
