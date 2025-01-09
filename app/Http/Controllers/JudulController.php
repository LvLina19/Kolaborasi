<?php

namespace App\Http\Controllers;

use App\Models\Judul;
use Illuminate\Http\Request;

class JudulController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isi' => 'required|string',
        ]);

        $judul = new \App\Models\Judul(); // membuat objek kosong di variabel model
        $judul->fill($validated); // mengisi var model dengan data yang sudah ada
        $judul->save(); // menyimpan data ke database

        if ($request->wantsJson()){
            return response()->json($judul);
        }
        return back();
        // return redirect()->route('pasien.index');
        // mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variabel inputan
    }
}
