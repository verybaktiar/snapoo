<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('admin.produk.index', compact('data'));
     
    }
    public function tambah()
    {
        return view('admin.produk.tambah');
    }
    public function store(Request $request)
    {
     $data = Produk::create($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('pesan', 'Data berhasil ditambahkan');
       
    }
    public function edit($id)
    {
        $data = Produk::find($id);
        return view('admin.produk.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect('produk')->with('pesan', 'Data berhasil dihapus');
    }
}
