<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien_dokter extends Model
{
   protected $table = 'pasien_dokter';
  protected $fillable = ['pasien_id','dokter_id','layanan_id','tanggal','keterangan'];
  protected $guarded =['id'];
   public function pasien(){
    	return $this->belongsTo(pasien::class);
    }
   public function dokter(){
    	return $this->belongsTo(dokter::class);
    }
   public function layanan(){
    	return $this->belongsTo(layanan::class);
    }
}
