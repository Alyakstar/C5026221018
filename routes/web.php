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





