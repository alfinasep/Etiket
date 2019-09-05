<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teater extends Model
{
    protected $table = 'teater';
    protected $fillable =  ['nama_teater'];
    protected $primaryKey = 'id';

    public function jadwal()
    {
	return $this->hasMany('App\jadwal','id');
	}

	public function seat()
    {
	return $this->hasMany('App\seat','id');
	}
}
