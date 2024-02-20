<?php

namespace App\Http\Controllers;

use App\Models\Waktu;
use Illuminate\Http\Request;

class WaktuController extends Controller
{
    public function index()
    {

        $data = Waktu::all();


        return view('admin.waktu.index', compact('data'));
    }

    public function tambah()
    {
        return view('admin.waktu.tambah');
    }

    public function store(Request $request)
    {
        $data = Waktu::create($request->all());

      
            $data->save();

        return redirect('waktu')->with('pesan', 'Data berhasil ditambahkan');
       
    }

    public function edit($id)
    {
        $data = Waktu::find($id);
        return view('admin.waktu.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Waktu::find($id);
        $data->update($request->all());
        return redirect('waktu')->with('pesan', 'Data berhasil diubah');
    }

    public function hapus($id)
    {
        $data = Waktu::find($id);
        $data->delete();
        return redirect('waktu')->with('pesan', 'Data berhasil dihapus');
    }

    
}
