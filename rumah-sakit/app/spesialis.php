<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spesialis extends Model
{
  protected $table = 'spesialis';
  protected $fillable = ['title'];

   public function dokter(){
    	return $this->HasMany(dokter::class);
    }

    public function listsj(){
      $out = [];
      foreach ($this->all() as $sp) {
        $out[$sp->id] = "{$sp->title}";
      }
      return $out;
    }

}
