<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArahController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }
}
