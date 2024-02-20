<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    //
    public function index()
    {
        $data = Reservasi::all();
        return view('admin.reservasi.index', compact('data'));
    }
    public function tambah(Request $request)
  
    {
        $data = Reservasi::create($request->all());

      
            $data->save();

        return redirect('/welcome')->with('pesan', 'Data berhasil ditambahkan');
    }
}
