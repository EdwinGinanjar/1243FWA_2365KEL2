<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\tentang;


class tentangcontroller extends Controller
{

   public function awal(){
       
        return view('tentang.awal');
   } 

   public function kedua(){

   		return view('tentang.kedua');
   }

}
