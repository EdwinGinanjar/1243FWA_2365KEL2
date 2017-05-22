<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class pengguna extends Model implements AuthenticatableContract,CanResetPasswordContract
{
use Authenticatable,CanResetPassword;
   protected $table = 'pengguna';
   protected $fillable = ['username','password','level'];

   public function dokter(){
   	return $this->hasOne(dokter::class);
   }
}
