<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArahController extends Controller
{
    public function indexMakanan()
    {
        return view('index');
    }

    public function menuMakanan()
    {
        return view('menu');
    }

    public function aboutMakanan()
    {
        return view('about');
    }
}
