<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bencana extends Model
{
    protected $fillable = ['tgl_bencana', 'lokasi', 'jenis_bencana', 'deskripsi'];
    public function provinsi(){
    	return $this->belongsTo(provinsi::class);
    }
    protected $primaryKey = 'id_bencana';
    protected $table = 'bencana';
    public $timestamps = false;
}
