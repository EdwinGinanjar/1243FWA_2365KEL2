<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
   protected $table = 'jadwal';
  protected $fillable = ['title'];

   public function dokter(){
    	return $this->HasMany(dokter::class);
    }
}
