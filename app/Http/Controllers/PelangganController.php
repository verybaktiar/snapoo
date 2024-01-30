<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use App\Exports\PelangganExport;
use App\Exports\PelangganExport2;
use App\Exports\PelangganExport3;
use App\Exports\PelangganExport4;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\pelanggan;
use Illuminate\Support\Facades\Session;
use App\Imports\PelangganImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('admin.pelanggan.pelanggan', compact('pelanggan'));
        
    }
    public function create()
    {
        return view('admin.pelanggan.tambah');
    }
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('no_telp', $request->no_telp);
        Session::flash('harga', $request->harga);
        Session::flash('produk', $request->produk);

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'harga' => 'required',
            'produk' => 'required',
        ], [
            'nama.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'no_telp.required' => 'no_telp wajib diisi',
            'harga.required' => 'harga wajib diisi',
            'produk.required' => 'produk wajib diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'harga' => $request->harga,
            'produk' => $request->produk,
        ];

        pelanggan::create($data);
        return redirect()->to('pelanggan')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $pelanggan = pelanggan::find($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'harga' => 'required',
            'produk' => 'required',
        ], [
            'nama.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'no_telp.required' => 'no_telp wajib diisi',
            'harga.required' => 'harga wajib diisi',
            'produk.required' => 'produk wajib diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'harga' => $request->harga,
            'produk' => $request->produk,
        ];

        pelanggan::find($id)->update($data);
        return redirect()->to('pelanggan')->with('success', 'Berhasil mengubah data');

    }

    public function destroy($nama)
    {
        DB::table('pelanggan')->where('nama', $nama)->delete();
        return redirect()->to('pelanggan')->with('success', 'Berhasil menghapus data');
    }

    
    public function pelangganimportexcel(Request $request)

    {

            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('file_excel', $namafile);
            Excel::import(new PelangganImport, public_path('/file_excel/' . $namafile));
            return redirect()->back()->with('success', 'Data Berhasil Diimport!');


    }

    public function exportpdf()
    {
        $data = Pelanggan::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('pelanggan.exportpdf');
        return $pdf->download('pelanggan.pdf');
    }

    public function exportexcel()
    {
        return Excel::download(new PelangganExport, 'siswa.xlsx');
    }
}
