<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Menu;
use Illuminate\Http\Request;

class ArahController extends Controller
{
    public function indexMakanan()
    {
        return view('index');
    }

    public function menuMakanan()
    {
        $menus = Menu::all();
        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        return view('menu', ['menus' => $menus]);
    }

    public function aboutMakanan()
    {
        $menus = Menu::all();
        if (request()->wantsJson()) {
            return response()->json($menus);
        }
        return view('about_admin', ['menus' => $menus]);
    }
}
