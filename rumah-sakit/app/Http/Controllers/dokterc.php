<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
use App\spesialis;
use App\jadwal;
use App\dokter;

class dokterc extends Controller
{
protected $informasi = 'Gagal melakukan aksi';

public function awal(){
    $semuadokter = dokter::all();
    return view('dokter.awal',compact('semuadokter'));
}

public function tambah(){
	$spesialis = new spesialis;
    $jadwal = new jadwal;
    return view('dokter.tambah',compact('jadwal','spesialis'));
}

public function simpan(Request $input){
	$pengguna = new pengguna($input->only('username','password','level'));
	if ($pengguna->save()) { 
		 $this->validate($input,[
            'nama'=>'required',
            'ttl'=>'required',
			'jenkel'=>'required',
            'tlp'=>'required | max:12',
			'alamat'=>'required',
            'spesialis_id'=>'required',
			'jadwal_id'=>'required'
            ]);
		$dokter = new dokter();
		$dokter->nama = $input->nama;
		$dokter->ttl = $input->ttl;
		$dokter->jenkel = $input->jenkel;
		$dokter->tlp = $input->tlp;
		$dokter->alamat = $input->alamat;
		$dokter->spesialis_id = $input->spesialis_id;
		$dokter->jadwal_id = $input->jadwal_id;
	if ($pengguna->dokter()->save($dokter)) $this->informasi = 'Berhasil Simpan data';
	}
        return redirect('dokter')->with(['informasi'=>$this->informasi]);
    }

public function edit($id){
    $dokter = dokter::find($id);
   $spesialis = new spesialis;
    $jadwal = new jadwal;
    $dokter = dokter::find($id);
	return view('dokter.edit',compact('dokter','spesialis','jadwal'))->with(array('dokter'=>$dokter));
}
public function lihat($id){
    $dokter = dokter::find($id);
    return view('dokter.lihat')->with(array('dokter'=>$dokter));
}
public function update($id, Request $input){
		$dokter = dokter::find($id);
		$pengguna = $dokter->pengguna;
		$dokter->nama = $input->nama;
		$dokter->ttl = $input->ttl;
		$dokter->jenkel = $input->jenkel;
		$dokter->tlp = $input->tlp;
		$dokter->alamat = $input->alamat;
		$dokter->spesialis_id = $input->spesialis_id;
		$dokter->jadwal_id = $input->jadwal_id;
   		$dokter->save();
		if(!is_null($input->username)){
			$pengguna->fill($input->only('username'));
		if (!empty($input->password)){
			$pengguna->password = $input->password;
		}
		if($pengguna->save()){
			$this->informasi = 'Berhasil update data';
			        return redirect('dokter')->with(['informasi'=>$this->informasi]);
		}
		else{
			$this->informasi= 'Gagal update Data';
		}
}
}
public function hapus($id){
	$dokter = dokter::find($id);
	if ($dokter->delete()){
		if($dokter->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
				}
	return redirect('dokter')->with(['informasi'=>$this->informasi]);
}
}
