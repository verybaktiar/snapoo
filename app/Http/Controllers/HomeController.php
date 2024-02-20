<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Services;
use App\Models\Waktu;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Web\Service;

class HomeController extends Controller
{
    //

    public function index()
    {
        $times = Waktu::all();
        $data = Produk::all();
        $services = Services::all();
        return view('user.welcome', compact('data','services','times'));
    }
}
