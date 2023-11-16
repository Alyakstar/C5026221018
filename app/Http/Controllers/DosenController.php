<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    //
    public function showtime($jam){
        return $jam;
    }
    
    //
    public function index(){
        $a = 0;
        $b = 5;
        $c = $a * $b;
        return "<h1> Hasil Perkalian =" . $c . "</h1>";
    }

    public function biodata(){
        $nama = "Alya Callysta Nugraha";
        $alamat = "Jember";
        $umur = 19;
    	return view('biodata', ['nama' => $nama, 'alamat' => $alamat ,'umur' => $umur]);
    }
}
