<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
  protected $table = 'pasien';
  protected $fillable = ['nama','ttl','jenkel','tlp','alamat','pekerjaan'];

    public function pasien_dokter(){
    	return $this->HasMany(pasien_dokter::class);
    }
        public function listspasien(){
      $out = [];
      foreach ($this->all() as $pasien) {
        $out[$pasien->id] = "{$pasien->nama}";
      }
      return $out;
    }
}
