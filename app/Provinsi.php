<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public function bencana(){
    	return $this->belongsTo('App\Bencana');
    }
    public function training(){
    	return $this->hasOne(bencana::class,'provinsi.id_provinsi');
    }
    protected $primaryKey = 'id_provinsi';
    protected $table = 'provinsi';
}
