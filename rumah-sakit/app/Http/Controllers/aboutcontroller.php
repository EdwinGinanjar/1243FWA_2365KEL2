<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\about;


class aboutcontroller extends Controller
{

   public function awal(){
       
        return view('about.awal');
   } 

}
