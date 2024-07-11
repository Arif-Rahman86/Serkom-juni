<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GrafikController extends Controller
{
    // untuk mengolah data yang akan di tampilkan di grafik
    public function index()
    {
        $data = DB::table('daftar')
            ->select('pilihanbeasiswa', DB::raw('COUNT(*) as total'))
            ->groupBy('pilihanbeasiswa')
            ->get();

        $labels = $data->pluck('pilihanbeasiswa');
        $totals = $data->pluck('total');

        return view('grafik', compact('labels', 'totals'));
    }
}
