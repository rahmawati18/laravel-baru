<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index (){
        $listKategoriGaleri=KategoriGaleri::all();

        return view ('kategori_galeri.index', compact ('listKategoriGaleri'));
    }
    public function show($id){
        // $listKategoriGaleri=KategoriArtikel::where('id',$id)-first();//pakai ini klo nma
 
        $kategoriGaleri=KategoriGaleri::find($id);
 
        return view ('kategori_galeri.show', compact ('kategoriGaleri'));
 }
}
