<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index (){
        $listKategoriBerita=KategoriBerita::all();

        return view ('kategori_berita.index', compact ('listKategoriBerita'));
    }
    public function show($id){
        // $listKategoriArtikel=KategoriArtikel::where('id',$id)-first();//pakai ini klo nma
 
        $kategoriBerita=KategoriBerita::find($id);
 
        return view ('kategori_berita.show', compact ('kategoriBerita'));
 }
}
