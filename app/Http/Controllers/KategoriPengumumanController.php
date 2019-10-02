<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index (){
        $listKategoriPengumuman=KategoriPengumuman::all();

        return view ('kategori_pengumuman.index', compact ('listKategoriPengumuman'));
    }
    public function show($id){
        // $listKategoriArtikel=KategoriArtikel::where('id',$id)-first();//pakai ini klo nma
 
        $kategoriPengumuman=KategoriPengumuman::find($id);
 
        return view ('kategori_pengumuman.show', compact ('kategoriPengumuman'));
 }
}
