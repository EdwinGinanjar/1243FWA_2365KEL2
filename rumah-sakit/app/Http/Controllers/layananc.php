<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\layanan;

class layananc extends Controller
{
	public function awal()
    {
        return view('layanan.awal',['data'=>layanan::all()]);
    }
    public function tambah()
    {
        return view('layanan.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'title'=>'required'
            ]);
        $layanan = new layanan();
        $layanan->title=$input->title;
        $informasi=$layanan->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('layanan')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $layanan = layanan::find($id);
        return view('layanan.edit')->with(array('layanan'=>$layanan));
    }
    public function lihat($id)
    {
        $layanan= layanan::find($id);
        return view('layanan.lihat')->with(array('layanan' =>$layanan));
    }
    public function update($id,Request $input)
    {
         $this->validate($input,[
            'title'=>'required'
            ]);
        $layanan = layanan::find($id);
       $layanan->title=$input->title;
        $informasi=$layanan->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('layanan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $layanan=layanan::find($id);
        $informasi=$layanan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('layanan')->with(['informasi'=>$informasi]);
    }

    }
