<?php

namespace App\Http\Controllers;

use App\Models\Waktu;

use Illuminate\Http\Request;

class timesController extends Controller
{
    //
    public function getTimes(Request $request)
    {
        // Ambil data waktu dari tabel database, misalnya dari kolom 'waktu' di tabel 'jam'
        $times = Waktu::select('waktu')->distinct()->get();
        
        return response()->json($times);
    }

}
