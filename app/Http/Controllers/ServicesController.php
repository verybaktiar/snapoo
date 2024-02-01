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
}
