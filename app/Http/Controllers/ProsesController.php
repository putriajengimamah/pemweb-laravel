<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Kategori;
use App\Models\Alternatif;
use App\Models\Add;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class ProsesController extends Controller
{

    // public function input()
    // {
    //     return view('admin.input', [
    //         'inputs' => Input::get()
    //     ]);
    // }

    public function perhitungan()
    {
        return view('admin.perhitungan', [
            'normalisasi' => Normalisasi::get(),
            'kategori' => Kategori::get(),
            'posts' => Alternatif::get(),
            'hasil' => Hasil::get()
        ]);

    }
}
