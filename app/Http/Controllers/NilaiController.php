<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{

    public function indexnilai()
	{
    	// mengambil data dari table pegawai
		$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}

    public function tambahnilai()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

    public function storenilai(Request $request)
	{

		DB::table('nilaikuliah')->insert([
			'nrp_kuliah' => $request->nrp,
			'nilai_kuliah' => $request->nilai,
			'sks_kuliah' => $request->sks,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');

	}

}
