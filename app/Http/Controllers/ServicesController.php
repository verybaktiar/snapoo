<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.services.index ', compact('services'));
    }

    public function tambah()
    {

        $services = Services::all();
        return view('admin.services.tambah ', compact('services'));
    }

    public function store(Request $request)
    {
        $data = Services::create($request->all());

        return redirect('services')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id_services)
    {
        $services = Services::find($id_services);
        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id_services)
    {
        $services = Services::find($id_services);
        $services->update($request->all());

        return redirect('services')->with('pesan', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $services = Services::find($id);
        $services->delete();
        return redirect('services')->with('hapus', 'Data berhasil dihapus');
    }


}
