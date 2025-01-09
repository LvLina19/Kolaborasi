<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Judul;
use Illuminate\Support\Facades\Storage;
use App\Models\Komen;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $menus = Menu::all();
        // if (request()->wantsJson()) {
        //     return response()->json($menus);
        // }
        // return view('index_admin', ['menus' => $menus]);
    }

    public function home()
    {
        $menus = Menu::all();
        $komentar = Komen::all();
        $juduls = \App\Models\Judul::latest()->paginate(3);

        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        return view('index_admin', ['menus' => $menus, 'komens' => $komentar, 'juduls' => $juduls]);
    }

    public function menus()
    {
        $menus = Menu::all();
        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        return view('menu_admin', ['menus' => $menus]);
        // return view('menu_admin', $menus);
        // return view('menu_admin');
    }

    public function about()
    {
        $menus = Menu::all();
        $juduls = Judul::all();
        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        return view('about_admin', ['menus' => $menus, 'juduls' => $juduls]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'nama_makanan' => 'required|min:3',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $menu = new \App\Models\Menu(); // membuat objek kosong di variabel model
        $menu->fill($requestData); // mengisi var model dengan data yang sudah ada
        $menu->foto = $request->file('foto')->store('public'); // mengisi objek path foto
        $menu->save(); // menyimpan data ke database

        if ($request->wantsJson()) {
            return response()->json($menu);
        }
        flash('Data Sudah Disimpan')->success();
        return redirect()->route('menu.menus');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['menu'] = \App\Models\Menu::findOrFail($id);
        return view('menu_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'nama_makanan' => 'required|min:3',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $menu = \App\Models\Menu::findOrFail($id); // membuat objek kosong di variabel model
        $menu->fill($requestData); // mengisi var model dengan data yang sudah ada
        // karena di validasi foto boleh null, maka perlu pengecekkan apakah file foto yang diupload ada
        // jik ada maka file foto lama dihapus dan diganti dengan file foto baru
        if ($request->hasFile('foto')) {
            Storage::delete($menu->foto);
            $menu->foto = $request->file('foto')->store('public'); // mengisi objek path foto
        }
        $menu->save(); // menyimpan data ke database
        flash('Data Sudah Diupdate')->success();
        return redirect()->route('menu.menus');
        // mengarahkan user ke url sebelumnya yaitu /menu/create dengan membawa variabel
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data pasien berdasarkan ID
        $menu = \App\Models\Menu::findOrFail($id);

        // Hapus file foto menu dari storage
        if ($menu->foto != null && Storage::exists($menu->foto)) {
            Storage::delete($menu->foto);
        }

        // Hapus data menu dari database
        $menu->delete();

        // Tampilkan pesan sukses
        flash('Data menu Berhasil Dihapus')->success();

        // Redirect kembali ke halaman indeks menu
        return back();
    }
}
