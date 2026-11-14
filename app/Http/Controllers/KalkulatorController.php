<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.segitiga', [
            'title'  => 'Kalkulator Segitiga',
            'alas'   => null,
            'tinggi' => null,
            'luas'   => null,
        ]);
    }

    public function hitung(Request $request)
    {
        $validated = $request->validate([
            'alas'   => 'required|numeric|min:0.01',
            'tinggi' => 'required|numeric|min:0.01',
        ]);

        $alas   = (float) $validated['alas'];
        $tinggi = (float) $validated['tinggi'];
        $luas   = 0.5 * $alas * $tinggi;

        return view('kalkulator.segitiga', [
            'title'  => 'Kalkulator Segitiga',
            'alas'   => $alas,
            'tinggi' => $tinggi,
            'luas'   => $luas,
        ]);
    }
}