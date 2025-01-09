<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class KomenController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'komentar' => 'required|string',
            'menu_id' => 'required|exists:menus,id',
        ]);

        $menu = Menu::find($validated['menu_id']);

        // Create a new Komen record
        \App\Models\Komen::create([
            'nama' => $validated['nama'],
            'komentar' => $validated['komentar'],
            'menu_id' => $menu->id,
        ]);

        return back();
        // return redirect()->route('pasien.index');
        // mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variabel inputan
    }

    public function destroy(string $id)
    {
        // Cari data komen berdasarkan ID
        $komen = \App\Models\Komen::findOrFail($id);

        // if ($komen->menu->exists()) {
        //     flash('Data tidak bisa dihapus karena sudah terkait dengan Menu')->error();
        //     return back();
        // }

        $komen->delete();
        flash('Komentar Berhasil Dihapus')->success();
        return back();
    }

}
