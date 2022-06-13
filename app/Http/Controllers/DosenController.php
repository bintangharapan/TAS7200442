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

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $dosen = Dosen::where('nama','like', '%'.$cari.'%')->paginate();
        return view('dosen',['dosen' => $dosen]);
    }

    public function deletedosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect('/dosen')->with('alert','Berhasil Dihapus');
    }

   
}
