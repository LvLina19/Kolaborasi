<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        echo "Nama saya " . $request->nama;
        echo "<br>";
        echo "Umur " . $request->umur;
        //return "Halo, saya adalah fungsi index dalam profile controller";
    }
    public function create(){
        return "Halo, saya adalah fungsi Create dalam profile controller";
    }
    public function edit($nama, $ID){
        return "Halo, nama saya $nama dan ID saya $ID";
    }
}
