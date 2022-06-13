<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\dosen;

class DosenAPIController extends Controller
{
    public function all()
    {
        $dosen = Dosen::all();
        return response()->json([
            'success' => true,
            'massage' => 'Data Berhasil Ditampilkan',
            'data' => $dosen]);
    }

    public function create(Request $request)
    {
        $dosen = Dosen::create([
            'nidn' => $request -> nidn,
            'nama' => $request -> nama,
            'status' => $request -> status,
            'jafung' => $request -> jafung,
            'pakar' => $request -> pakar
        ]);

        if($dosen)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Data Berhasil Disimpan',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Data Gagal Disimpan',
            ],401);
        }
    }

    public function update($id, Request $request)
    {
        $dosen = Dosen::whereId($id)->update([
         'nidn' => $request -> nidn,
         'nama' => $request -> nama,
         'status' => $request -> status,
         'jafung' => $request -> jafung,
         'pakar' => $request -> pakar
        ]);

       if($dosen)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Data Berhasil Diubah',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Data Gagal Diubah',
            ],400);
        }
    }


    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen -> delete();
        
       if($dosen)
        {
            return response()->json([
                'success' => true,
                'massage' => 'Data Berhasil Dihapus',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'massage' => 'Data Gagal Dihapus',
            ],400);
        }
    }

}
