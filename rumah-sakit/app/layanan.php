<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
   protected $table = 'layanan';
  protected $fillable = ['title'];
  
    public function pasien_dokter(){
    	return $this->HasMany(pasien_dokter::class);
    }
    public function listslayanan(){
      $out = [];
      foreach ($this->all() as $layanan) {
        $out[$layanan->id] = "{$layanan->title}";
      }
      return $out;
    }
}
