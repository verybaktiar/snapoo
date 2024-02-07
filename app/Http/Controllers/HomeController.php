<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Services;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class HomeController extends Controller
{
    //

    public function index()
    {
        $data = Produk::all();
        $services = Services::all();
        return view('user.welcome', compact('data','services'));
    }
}
