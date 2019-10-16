<?php

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
Route::get('/refereshcapcha', 'HelperController@refereshCapcha');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel', 'KategoriArtikelController');
Route::get('/kategori_artikel/trash', 'KategoriArtikelController@trash')->name('kategori_artikel.trash');


Route::resource('kategori_berita', 'KategoriBeritaController');


Route::resource('kategori_galeri', 'KategoriGaleriController');


Route::resource('/kategori_pengumuman', 'KategoriPengumumanController');


Route::resource('artikel','ArtikelController');


Route::resource('berita','BeritaController');


Route::resource('galeri','GaleriController');


Route::resource('pengumuman','PengumumanController');
