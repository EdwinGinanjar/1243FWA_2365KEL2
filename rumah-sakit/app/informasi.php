<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
   protected $table = 'informasi';
  protected $fillable = ['judul','title','gambar','jenis_info_id'];

   public function jenis_info(){
    	return $this->belongsTo(jenis_info::class);
    }


}
