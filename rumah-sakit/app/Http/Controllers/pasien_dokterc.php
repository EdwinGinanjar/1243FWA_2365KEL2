<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

use App\Http\Requests;
use App\pasien;
use App\pasien_dokter;
use App\layanan;
use App\dokter;
use Auth;
use Validator;

class pasien_dokterc extends Controller
{
	protected $informasi = 'Gagal melakukan aksi';

public function awal(){
    $semuapasien_dokter = pasien_dokter::all();
    return view('pasien_dokter.awal',compact('semuapasien_dokter'));
}

public function tambah(){
    $pasien = new pasien;
    $dokter = new dokter;
    $layanan = new layanan;
    $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get(); 
    return view('pasien_dokter.tambah',compact('pasien','dokter','layanan'));
}

public function simpan(Request $input){
	$this->validate($input,[
		'pasien_id'=>'required',
		'dokter_id'=>'required',
		'layanan_id'=>'required'
		]);
		$pasien_dokter = new pasien_dokter();
		$pasien_dokter->pasien_id = $input->pasien_id;
		$pasien_dokter->dokter_id = $input->dokter_id;
		$pasien_dokter->layanan_id = $input->layanan_id;
		$pasien_dokter->tanggal = $input->tanggal;
		$pasien_dokter->keterangan = $input->keterangan;
		if ($pasien_dokter->save()) $this->informasi = 'Berhasil Simpan data';
        return redirect('pasien_dokter')->with(['informasi'=>$this->informasi]);
    }

public function edit($id){
    $pasien_dokter = pasien_dokter::find($id);
   $pasien = new pasien;
    $dokter = new dokter;
    $layanan = new layanan;
	return view('pasien_dokter.edit',compact('pasien','dokter','layanan'))->with(array('pasien_dokter'=>$pasien_dokter));
}
public function lihat($id){
    $pasien_dokter = pasien_dokter::find($id);
    return view('pasien_dokter.lihat')->with(array('pasien_dokter'=>$pasien_dokter));
}
public function update($id, Request $input){
	 $pasien_dokter = pasien_dokter::find($id);
		$pasien_dokter->pasien_id = $input->pasien_id;
		$pasien_dokter->dokter_id = $input->dokter_id;
		$pasien_dokter->layanan_id = $input->layanan_id;
		$pasien_dokter->tanggal = $input->tanggal;
		$pasien_dokter->keterangan = $input->keterangan;
   		$pasien_dokter->save();
		if($pasien_dokter->save()){
			$this->informasi = 'Berhasil update data';
			return redirect('pasien_dokter')->with(['informasi'=>$this->informasi]);
		}
		else{
			$this->informasi= 'Gagal update Data';
		}

}
public function hapus($id){
    $pasien_dokter = pasien_dokter::find($id);
    if($pasien_dokter->delete()) $this->informasi = 'Berhasil Hapus data';
    return redirect('pasien_dokter')->with(['informasi'=>$this->informasi]);
}
}
