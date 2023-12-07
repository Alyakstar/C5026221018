<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function table()
	{

        $keranjangbelanjaalya = DB::table('keranjangbelanjaalya')->get();
		return view('table',['keranjangbelanjaalya' => $keranjangbelanjaalya]);

	}

    public function batal($id)
	{

		DB::table('keranjangbelanjaalya')->where('keranjang_id',$id)->delete();
		return redirect('/keranjang');
	}

    public function store(Request $request)
	{

		DB::table('keranjangbelanjaalya')->insert([
			'keranjang_kode' => $request->kodebarang,
			'keranjang_jumlah' => $request->jumlah,
			'keranjang_harga' => $request->harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjang');

	}

    public function beli()
	{

		// memanggil view beli
		return view('beli');

	}



}
