<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
  protected $table = 'dokter';
  protected $fillable = ['nama','ttl','jenkel','tlp','alamat','spesialis_id','jadwal_id','pengguna_id'];

  public function spesialis(){
    	return $this->belongsTo(spesialis::class);
    }
   public function jadwal(){
    	return $this->belongsTo(jadwal::class);
    }
    public function pasien_dokter(){
    	return $this->hasMany(pasien_dokter::class);
    }
    public function pengguna(){
      return $this->belongsTo(pengguna::class);
    }
     public function listsdokter(){
      $out = [];
      foreach ($this->all() as $dokter) {
        $out[$dokter->id] = "{$dokter->nama}";
      }
      return $out;
    }
    public function getUsernameAttribute(){
      return $this->pengguna->username;
    }
    public function getPasswordAttribute(){
      return $this->pengguna->password;
    }
    
}
