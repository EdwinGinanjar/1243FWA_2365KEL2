<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal;

class jadwalc extends Controller
{
public function awal()
    {
        return view('jadwal.awal',['data'=>jadwal::all()]);
    }
    public function tambah()
    {
        return view('jadwal.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'title'=>'required'
            ]);
        $jadwal = new jadwal();
        $jadwal->title=$input->title;
        $informasi=$jadwal->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('jadwal')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $jadwal = jadwal::find($id);
        return view('jadwal.edit')->with(array('jadwal'=>$jadwal));
    }
    public function lihat($id)
    {
        $jadwal= jadwal::find($id);
        return view('jadwal.lihat')->with(array('jadwal' =>$jadwal));
    }
    public function update($id,Request $input)
    {
         $this->validate($input,[
            'title'=>'required'
            ]);
        $jadwal = jadwal::find($id);
       $jadwal->title=$input->title;
        $informasi=$jadwal->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('jadwal')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jadwal=jadwal::find($id);
        $informasi=$jadwal->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jadwal')->with(['informasi'=>$informasi]);
    }
}
