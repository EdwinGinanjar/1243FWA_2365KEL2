x   <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\spesialis;

class spesialisc extends Controller
{
	public function awal()
    {
        return view('spesialis.awal',['data'=>spesialis::all()]);
    }
    public function tambah()
    {
        return view('spesialis.tambah');
    }
    public function simpan(Request $input)
    {
        $this->validate($input,[
            'title'=>'required'
            ]);
        $spesialis = new spesialis();
        $spesialis->title=$input->title;
        $informasi=$spesialis->save() ? 'Berhasil simpan data':'Gagal simpan data';
        return redirect('spesialis')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $spesialis = spesialis::find($id);
        return view('spesialis.edit')->with(array('spesialis'=>$spesialis));
    }
    public function lihat($id)
    {
        $spesialis= spesialis::find($id);
        return view('spesialis.lihat')->with(array('spesialis' =>$spesialis));
    }
    public function update($id,Request $input)
    {
         $this->validate($input,[
            'title'=>'required'
            ]);
        $spesialis = spesialis::find($id);
       $spesialis->title=$input->title;
        $informasi=$spesialis->save() ? 'Berhasil update data':'Gagal update data';
        return redirect('spesialis')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $spesialis=spesialis::find($id);
        $informasi=$spesialis->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('spesialis')->with(['informasi'=>$informasi]);
    }

    }
