<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    // untuk menngolah data yang akan ditampilkan di halaman Hasil
    public function index()
    {
        $daftarItems = Daftar::all();
        return view('hasil', compact('daftarItems'));
    }
}
