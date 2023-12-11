<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('ets');
});

Route::get('halo', function () {
    //bisa diisi program apa aja
    return "Halo apa kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo apa kabar<h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('reddog', function () {
    return view('replika-linktree');
});

Route::get('whatmakeusdiff', function () {
    return view('replika-bootstrap');
});

Route::get('hello', function () {
    return view('hello-html');
});

Route::get('js1', function () {
    return view('js1-html');
});

Route::get('link', function () {
    return view('link-html');
});

Route::get('style', function () {
    return view('style-html');
});

Route::get('js2', function () {
    return view('js2-html');
});

Route::get('responsive', function () {
    return view('responsive-html');
});

Route::get('responsive2', function () {
    return view('responsive2-html');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@lihat');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD latihan EAS Perempuan
Route::get('/keranjang','App\Http\Controllers\KeranjangController@table');
Route::get('/keranjang/batal/{id}','App\Http\Controllers\KeranjangController@batal');
Route::get('/keranjang/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjang/store','App\Http\Controllers\KeranjangController@store');

//route CRUD Tugas EAS
Route::get('/mouse','App\Http\Controllers\MouseController@indexmouse');
Route::get('/mouse/tambah','App\Http\Controllers\MouseController@tambahmouse');
Route::get('/mouse/view/{id}','App\Http\Controllers\MouseController@viewmouse');
Route::get('/mouse/cari','App\Http\Controllers\MouseController@carimouse');
Route::post('/mouse/update','App\Http\Controllers\MouseController@updatemouse');
Route::get('/mouse/hapus/{id}','App\Http\Controllers\MouseController@hapusmouse');
Route::post('/mouse/store','App\Http\Controllers\MouseController@storemouse');
Route::get('/mouse/edit/{id}','App\Http\Controllers\MouseController@editmouse');

//route CRUD latihan EAS Laki - Laki
Route::get('/nilai','App\Http\Controllers\NilaiController@indexnilai');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiController@tambahnilai');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@storenilai');


//route CRUD Kode EAS AA
Route::get('/chat','App\Http\Controllers\ChatController@indexchat');
