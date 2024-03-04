<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Produk;
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
        // Validasi request data reservasi di sini jika diperlukan
    
        // Buat reservasi baru
        $data = Reservasi::create($request->all());
        
        // Periksa apakah reservasi berhasil dibuat
        if ($data) {
            // Ambil nama paket dari data reservasi
            $nama_paket = $request->nama_paket; // Sesuaikan dengan nama field pada form reservasi
    
            // Temukan produk berdasarkan nama paket
            $produk = Produk::where('nama_paket', $nama_paket)->first();
    
            // Periksa apakah produk ditemukan
            if ($produk) {
                // Periksa apakah stok mencukupi
                if ($produk->slot > 0) {
                    // Kurangi stok
                    $produk->slot -= 1; // Misalnya, satu item dipesan
    
                    // Simpan perubahan stok ke dalam basis data
                    $produk->save();
    
                    // Redirect ke halaman welcome dengan pesan sukses
                    return redirect('/')->with('pesan', 'Reservasi berhasil ditambahkan');
                } else {
                    // Jika stok tidak mencukupi, kembalikan dengan pesan kesalahan
                    return redirect()->back()->with('error', 'Stok tidak mencukupi untuk melakukan reservasi.');
                }
            } else {
                // Jika produk tidak ditemukan, kembalikan dengan pesan kesalahan
                return redirect()->back()->with('error', 'Produk tidak ditemukan.');
            }
        } else {
            // Jika reservasi gagal dibuat, kembalikan dengan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal membuat reservasi. Silakan coba lagi.');
        }
    }
    

    public function hapus($id_reservasi)
    {
        $data = Reservasi::find($id_reservasi);
        $data->delete();
        return redirect('reservasi')->with('hapus', 'Data berhasil dihapus');
    }
    
    
}
