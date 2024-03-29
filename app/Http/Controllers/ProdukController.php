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
    public function edit($id_produk)
    {
        $data = Produk::find($id_produk);
        return view('admin.produk.edit', compact('data'));
    }
    public function update(Request $request, $id_produk)
    {
        $data = Produk::find($id_produk);
        $data->update($request->all());

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('produk')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id_produk)
    {
        $data = Produk::find($id_produk);
        $data->delete();
        return redirect('produk')->with('hapus', 'Data berhasil dihapus');
    }
}
