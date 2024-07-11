<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    // untuk mengirim data ke route
    public function index() 
    {

        return view('daftar');
    }

    public function store(Request $request)
{
    
    // validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/|max:255',
        'no_hp' => 'required|numeric|digits_between:10,13',
        'semester' => 'required|string',
        
        'pilihanbeasiswa' => 'required|string',
        'berkas' => 'file|mimes:pdf,jpg,zip',
    ]);

    // untuk menyimoan data berkas
    $extension = $request->file('berkas')->getClientOriginalExtension();
    $fileName = 'berkas_' . now()->format('Ymd_His') . '_' . uniqid() . '.' . $extension;

    $berkasPath = $request->file('berkas')->storeAs('berkas', $fileName, 'public');

    // untuk create data pada table
    $daftar =Daftar::create([
        'nama' => $request->input('nama'),
        'email' => $request->input('email'),
        'no_hp' => $request->input('no_hp'),
        'semester' => $request->input('semester'),
        'ipk' => $request->input('ipk'),
        'pilihanbeasiswa' => $request->input('pilihanbeasiswa'),
        'berkas' => $berkasPath,
        'status' => 'Belum Terverifikasi',
    ]);

    // untuk menampilkan halaman setelah tombol daftar di klik
    $daftar = Daftar::find($daftar->id);

    return view('detail', compact('daftar'));
}
}


