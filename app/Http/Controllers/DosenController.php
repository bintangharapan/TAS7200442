<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class DosenController extends Controller
{
    public function dosen()
    {
    $dosen = Dosen::paginate(10);
     return view('dosen',[
         'success' => true,
         'massage' => 'Data Berhasil Ditampilkan',
         'dosen' => $dosen]);
    }

    public function formulirdosen()
    {
        return view('formulirdosen');
    }

    public function simpandosen(Request $request)
    {
        $pakar = implode(",", $request->get('pakar'));
        Dosen::create([
            'nidn'=> $request->nidn,
            'nama'=> $request->nama,
            'status'=> $request->status,
            'jafung'=> $request->jafung,
            'pakar'=> $pakar
        ]);
        return redirect("/dosen");
    }


    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $dosen = Dosen::where('nama','like', '%'.$cari.'%')->paginate();
        return view('dosen',['dosen' => $dosen]);
    }

    public function editdosen($id)
    {
        $dosen = Dosen::find($id);
        return view('editdosen', ['dosen => $dosen']);
    }


    public function hapusdosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('alert','Berhasil Dihapus');
    }

   
}
