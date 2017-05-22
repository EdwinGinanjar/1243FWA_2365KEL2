<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Validator;

use App\pasien;
use App\dokter;
use App\pasien_dokter;
use App\pengguna;
use App\spesialis;
use App\jadwal;
use App\awal_rawat;
use App\layanan;
use App\ld;

class Pdokterc extends Controller
{
public function awal_dokter(){
	$dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get();
	return view('pdokter.awal_dokter',compact('dokter'));
}
public function lihatpasien(){
	$semuapasien = pasien::all();
	$dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get();
	return view('pdokter.lihat_pasien',compact('semuapasien','dokter'));
}
public function editdokter($id){
   $spesialis = new spesialis;
    $jadwal = new jadwal;
   $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get();
   $dr = dokter::find($id);
	return view('pdokter.edit_dokter',compact('dr','jadwal','spesialis','dokter'))->with(array('dokter'=>$dokter));
}

public function lihatdokter($id){
	$dr = dokter::find($id);
    $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get();
    return view('pdokter.lihat_dokter',compact('dr'))->with(array('dokter'=>$dokter));
}

public function updatedokter($id, Request $input){
 $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get();
		$dokter = new dokter();
		$dokter->nama = $input->nama;
		$dokter->ttl = $input->ttl;
		$dokter->jenkel = $input->jenkel;
		$dokter->tlp = $input->tlp;
		$dokter->alamat = $input->alamat;
		$dokter->spesialis_id = $input->spesialis_id;
		$dokter->jadwal_id = $input->jadwal_id;
		//$dokter->pengguna_id = $input->username;
   		$dokter->save();
	if(!is_null($input->username)){
		$pengguna->fill($input->only('username'));
		if (!empty($input->password)){
			$pengguna->password = $input->password;
		}
		if($pengguna->save()){
			$this->informasi = 'Berhasil update data';
	return redirect('pdokter.lihat_dokter')->with(['informasi'=>$this->informasi]);
		}
		else{
			$this->informasi= 'Gagal update Data';
		}
}
}
public function tambahrawat(){ 
    $pasien = new pasien;
    $layanan = new layanan;
    $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get(); 
    return view('pdokter.tambah_rawat',compact('pasien','dokter','layanan'));
}
public function simpanrawat(Request $input){
	$this->validate($input,[
		'pasien_id'=>'required',
		'dokter_id'=>'required',
		'layanan_id'=>'required',
		'tanggal'=>'required',
		'keterangan'=>'required'
	]);
		$pasien_dokter = new pasien_dokter();
		$pasien_dokter->pasien_id = $input->pasien_id;
		$pasien_dokter->dokter_id = $input->dokter_id;
		$pasien_dokter->layanan_id = $input->layanan_id;
		$pasien_dokter->tanggal = $input->tanggal;
		$pasien_dokter->keterangan = $input->keterangan;
		if ($pasien_dokter->save()) $this->informasi = 'Berhasil Simpan data';
        return redirect('awal_rawat')->with(['informasi'=>$this->informasi]);
    }

public function editrawat($id){
    $pasien_dokter = pasien_dokter::find($id);
   	$pasien = new pasien;
    $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get(); 
    $layanan = new layanan;
	return view('pdokter.edit_rawat',compact('pasien','dokter','layanan'))->with(array('pasien_dokter'=>$pasien_dokter));
}
public function awalrawat(){
    $semuapasien_dokter = pasien_dokter::where('dokter_id','=',Auth::user()->dokter->id)->get();
     $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get(); 
    return view('pdokter.awal_rawat',compact('semuapasien_dokter','dokter'));
}
public function lihatrawat(){
    $pasien_dokter = pasien_dokter::where('pengguna_id','=',Auth::user()->id)->get();
     $dokter = dokter::where('pengguna_id','=',Auth::user()->id)->get(); 
    return view('pdokter.lihat_rawat',compact('dokter','pasien_dokter'));
}

public function dokterspesialis(){
    $dokter= pasien_dokter::where('dokter_id','=',Auth::user()->id)->get();
     $spesialis = dokter::where('spesialis_id','=',Auth::user()->id)->get(); 
    return view('lihat_spesialis',compact('dokter','spesialis'));
}

public function updaterawat($id, Request $input){
	 $pasien_dokter = pasien_dokter::find($id);
		$pasien_dokter->pasien_id = $input->pasien_id;
		$pasien_dokter->dokter_id = $input->dokter_id;
		$pasien_dokter->layanan_id = $input->layanan_id;
		$pasien_dokter->tanggal = $input->tanggal;
		$pasien_dokter->keterangan = $input->keterangan;
   		$pasien_dokter->save();
		if($pasien_dokter->save()){
			$this->informasi = 'Berhasil update data';
			return redirect('awal_rawat')->with(['informasi'=>$this->informasi]);
		}
		else{
			$this->informasi= 'Gagal update Data';
		}

}
public function hapus($id){
    $pasien_dokter = pasien_dokter::find($id);
    if($pasien_dokter->delete()) $this->informasi = 'Berhasil Hapus data';
    return redirect('rawat')->with(['informasi'=>$this->informasi]);
}




}
