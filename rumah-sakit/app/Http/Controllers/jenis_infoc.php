<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\jenis_info;

class jenis_infoc extends Controller
{
	public function awal()
    {
        return view('jenis_info.awal',['data'=>jenis_info::all()]);
    }
    public function tambah()
    {
        return view('jenis_info.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,['title'=>'required']);
        $jenis_info = new jenis_info();
        $jenis_info->title=$input->title;
        $informasi=$jenis_info->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('jenis_info')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $jenis_info = jenis_info::find($id);
        return view('jenis_info.edit')->with(array('jenis_info'=>$jenis_info));
    }
    public function lihat($id)
    {
        $jenis_info= jenis_info::find($id);
        return view('jenis_info.lihat')->with(array('jenis_info' =>$jenis_info));
    }
    public function update($id,Request $input)
    {
         $this->validate($input,[
            'title'=>'required'
            ]);
        $jenis_info = jenis_info::find($id);
       $jenis_info->title=$input->title;
        $informasi=$jenis_info->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('jenis_info')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jenis_info=jenis_info::find($id);
        $informasi=$jenis_info->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('jenis_info')->with(['informasi'=>$informasi]);
    }

    }
