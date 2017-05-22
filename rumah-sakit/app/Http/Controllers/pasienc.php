<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pasien;
use App\pengguna;

class pasienc extends Controller{
protected $informasi = 'Gagal melakukan aksi';
public function awal(){
	$semuapasien = pasien::all();
	return view('pasien.awal',compact('semuapasien'));
}
public function tambah(){
	return view('pasien.tambah');
}
public function simpan(Request $input){
	 $this->validate($input,[
            'nama'=>'required',
            'ttl'=>'required',
			'jenkel'=>'required',
            'tlp'=>'required | max:12',
			'alamat'=>'required',
            'pekerjaan'=>'required'
			]);
		$pasien = new pasien();
		$pasien->nama = $input->nama;
		$pasien->ttl = $input->ttl;
		$pasien->jenkel = $input->jenkel;
		$pasien->tlp = $input->tlp;
		$pasien->alamat = $input->alamat;
		$pasien->pekerjaan = $input->pekerjaan;
		if ($pasien->save()) $this->informasi = 'Berhasil Simpan data';
	return redirect('pasien')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
	$pasien = pasien::find($id);
	return view('pasien.edit')->with(array('pasien'=>$pasien));
}
public function lihat($id){
	$pasien = pasien::find($id);
	return view('pasien.lihat')->with(array('pasien'=>$pasien));
}
public function update($id,Request $input){
	$pasien = pasien::find($id) ;
	$pasien->nama = $input->nama;
	$pasien->ttl = $input->ttl;
	$pasien->jenkel = $input->jenkel;
	$pasien->tlp = $input->tlp;
	$pasien->alamat = $input->alamat;
	$pasien->pekerjaan = $input->pekerjaan;
	$pasien->save();
		if($pasien->save()){
			$this->informasi = 'Berhasil update data';
		}
		else{
			$this->informasi= 'Gagal update Data';
		}
return redirect('pasien')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
	$pasien = pasien::find($id);
	if ($pasien->delete()){
		if($pasien->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
	}
	return redirect('pasien')->with(['informasi'=>$this->informasi]);
}

}