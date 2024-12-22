<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data['menu'] = \App\Models\Menu::latest()->paginate(10);
        // return view('index', $data);
        // return $data;
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
            'id_menu' => 'required|unique:menus,id_menu',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'nama_makanan' => 'required|min:3',
            'harga' => 'required|numeric',
        ]);

        $menu = new \App\Models\Menu(); // membuat objek kosong di variabel model
        $menu->fill($requestData); // mengisi var model dengan data yang sudah ada
        $menu->foto = $request->file('foto')->store('public'); // mengisi objek path foto
        $menu->save(); // menyimpan data ke database
        if ($request->wantsJson()){
            return response()->json($menu);
        }
        flash('Data Sudah Disimpan')->success();
        return redirect()->route('admin.menu');
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
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }


}
