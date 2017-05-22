<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_info extends Model
{
  protected $table = 'jenis_info';
  protected $fillable = ['title'];

   public function informasi(){
    	return $this->HasMany(informasi::class);
    }
   public function listsjenisinfo(){
      $out = [];
      foreach ($this->all() as $jenis) {
        $out[$jenis->id] = "{$jenis->title}";
      }
      return $out;
    }
}

