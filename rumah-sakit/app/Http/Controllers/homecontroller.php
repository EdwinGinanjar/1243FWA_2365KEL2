<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\informasi;
use App\jadwal;
use App\dokter;
use App\spesialis;


class homecontroller extends Controller
{

   public function awal(){
        return view('home.awal');
   } 
   public function layanan(){
       $sl = informasi::where('jenis_info_id','=','1')->orderBy('created_at','desc')->get();
       return view('berita.layanan',compact('sl'));
   }
   public function fasilitas(){
       $sf = informasi::where('jenis_info_id','=','2')->orderBy('created_at','desc')->get();
       return view('berita.fasilitas',compact('sf'));
   }
   public function umum(){
       $su = informasi::where('jenis_info_id','=','3')->orderBy('created_at','desc')->get();
       return view('berita.umum',compact('su'));
   }
   public function jadwaldokter(){
       $semuaDokter = dokter::all();
       return view('berita.jadwal',compact('semuaDokter'));
   }
 public function lihatjadwaldokter($id)
    {
        $dokter = dokter::where('jadwal_id','=',$id)->get();
        return view('berita.lihatjadwal',compact('dokter'));
    }
    public function spesialis(){
       return view('berita.spesialis',['data'=>spesialis::all()]);
   }
 public function lihatspesialis($id)
    {
        $spesialis= spesialis::find($id);
        return view('berita.lihatspesialis')->with(array('spesialis' =>$spesialis));
    }

}
