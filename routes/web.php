<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

// Routing Daftar Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])
    ->name('mahasiswa.index');

// Routing Kalkulator Segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'index'])
    ->name('kalkulator.segitiga');
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitung'])
    ->name('kalkulator.hitung');