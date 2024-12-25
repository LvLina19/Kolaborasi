<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('index_admin');
    }
    
    public function menus()
    {
        $menus = Menu::all()->toArray();
        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        $data['menu'] = $menus;
        return view('menu_admin', $data);
    }

    public function about()
    {
        return view('about_admin');
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
            'harga' => 'required|numeric',
        ]);

        $menu = new \App\Models\Menu(); // membuat objek kosong di variabel model
        $menu->fill($requestData); // mengisi var model dengan data yang sudah ada
        $menu->foto = $request->file('foto')->store('public'); // mengisi objek path foto
        $menu->save(); // menyimpan data ke database

        Log::info('Data yang diterima: ', $requestData); 
        Log::info('Menu yang disimpan: ', $menu->toArray());

        if ($request->wantsJson()){
            return response()->json($menu);
        }
        flash('Data Sudah Disimpan')->success();
        return redirect()->route('menu.menu');
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
