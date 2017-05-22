<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\team;


class teamcontroller extends Controller
{

   public function awal(){
       
        return view('team.awal');
   } 

}
