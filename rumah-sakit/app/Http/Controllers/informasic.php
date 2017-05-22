<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Image;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\informasi;
use App\jenis_info; 

class informasic extends Controller
{
 protected $info = 'Gagal melakukan aksi';

public function awal(){
    $semuainformasi = informasi::all();
    return view('informasi.awal',compact('semuainformasi'));
}

public function tambah(){
    $jenis_info = new jenis_info();
    return view('informasi.tambah',compact('jenis_info'));
}

public function simpan(Request $input){
	$this->validate($input,[
            'title'=>'required|min:50',
            'judul'=>'required',
			'gambar'=>'required',
			'jenis_info_id'=>'required',
    ]);
		if(Input::hasFile('gambar'))
		$foto = Input::file('gambar');
		$img = Image::make($foto);
		Response::make($img->encode('jpeg'));
		$foto->move('uploads',$foto->getClientOriginalName());

		$fotoname = Input::file('gambar')->getClientOriginalName();	
		$informasi = new informasi();
		$informasi->judul = $input->judul;
		$informasi->title = $input->title;
		$informasi->gambar = $fotoname;
		$informasi->jenis_info_id = $input->jenis_info_id;
		if ($informasi->save()) $this->info = 'Berhasil Simpan data';
        return redirect('/informasi')->with(['info'=>$this->info]);
}


public function edit($id){
    $informasi = informasi::find($id);
   $jenis_info = new jenis_info();
	return view('informasi.edit',compact('jenis_info'))->with(array('informasi'=>$informasi));
}
public function lihat($id){
    $informasi = informasi::find($id);
    return view('informasi.lihat')->with(array('informasi'=>$informasi));
}
public function update($id, Request $input){
	$this->validate($input,[
            'title'=>'required|min:50',
            'judul'=>'required',
			'gambar'=>'required',
			'jenis_info_id'=>'required',
    ]);
	$informasi = informasi::find($id);
	if(Input::hasFile('gambar'))
            $foto = Input::file('gambar');
            $img = Image::make($foto);
            Response::make($img->encode('jpeg'));
            $foto->move('uploads', $foto->getClientOriginalName());   
            $fotoname = Input::file('gambar')->getClientOriginalName();
		$informasi->judul = $input->judul;
		$informasi->title = $input->title;
		$informasi->gambar = $fotoname;
		$informasi->jenis_info_id = $input->jenis_info_id;
   		if ($informasi->save()) $this->info = 'Berhasil Ubah data';
        return redirect('/informasi')->with(['info'=>$this->info]);
		}
public function hapus($id){
    $informasi = informasi::find($id);
    if($informasi->delete()) $this->info = 'Berhasil Hapus data';
    return redirect('informasi')->with(['info'=>$this->info]);
}
}
