<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\PilihanBeasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PilihanBeasiswaController::class, 'index'])->name('pilihanbeasiswa');
Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');
Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');
Route::get('/grafik', [GrafikController::class, 'index'])->name('grafik');

