<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MouseController extends Controller
{
	public function indexmouse()
	{
        $mouse = DB::table('mouse')->paginate(6);
		return view('indexmouse',['mouse' => $mouse]);

	}

	public function tambahmouse()
	{
		// memanggil view tambah
		return view('tambahmouse');
	}

	// method untuk insert data ke table
	public function storemouse(Request $request)
	{
		// insert data ke table
		DB::table('mouse')->insert([
			'kodemouse' => $request->kodemouse,
			'merkmouse' => $request->merkmouse,
			'stockmouse' => $request->stockmouse,
			'tersedia' => $request->tersedia = ($request->stockmouse != 0) ? 'Y':'N',
		]);
		// alihkan halaman ke halaman mouse
		return redirect('/mouse');

	}

	// method untuk edit data mouse
	public function editmouse($id)
	{
		// mengambil data mouse berdasarkan id yang dipilih
		$mouse = DB::table('mouse')->where('kodemouse',$id)->get();
		// passing data sepatu yang didapat ke view edit.blade.php
		return view('editmouse',['mouse' => $mouse]);

	}

	// update data mouse
	public function updatemouse(Request $request)
	{
		// update data
		DB::table('mouse')->where('kodemouse',$request->kodemouse)->update([
			'kodemouse' => $request->kodemouse,
			'merkmouse' => $request->merkmouse,
			'stockmouse' => $request->stockmouse,
			'tersedia' => $request->tersedia = ($request->stockmouse != 0) ? 'Y':'N',
		]);
		// alihkan halaman ke halaman mouse
		return redirect('/mouse');
	}

	// method untuk hapus data mouse
	public function hapusmouse($id)
	{
		// menghapus data mouse berdasarkan id yang dipilih
		DB::table('mouse')->where('kodemouse',$id)->delete();

		// alihkan halaman ke halaman mouse
		return redirect('/mouse');
	}

    public function viewmouse($id)
	{
		// mengambil data mouse berdasarkan id yang dipilih
		$mouse = DB::table('mouse')->where('kodemouse',$id)->get();

		return view('viewmouse',['mouse' => $mouse]);

	}

    public function carimouse(Request $request)
	{
		$cari = $request->cari;
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%".$cari."%")
		->paginate();
		return view('indexmouse',['mouse' => $mouse, 'cari' => $cari]);
	}

}
