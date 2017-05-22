<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\beranda;


class berandaController extends Controller
{

   protected $informasi = 'gagal melakukan aksi';
   public function awal(){
        
        return view('master');
   } 

}
