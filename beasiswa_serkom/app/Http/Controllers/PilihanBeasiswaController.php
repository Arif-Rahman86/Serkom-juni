<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihanBeasiswaController extends Controller
{
    // untuk mengirim view yang akan ditampilkan di halaman Pilihan Beasiswa
    public function index()
    {
        return view('pilihanbeasiswa');
    }
}
