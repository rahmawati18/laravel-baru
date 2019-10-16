<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class kategoriBeritaController extends Controller
{
    public function index (){
        $listKategoriBerita=KategoriBerita::all();

        return view('kategori_berita.index',compact('listKategoriBerita'));
        
    }

    public function show($id){
        
        $KategoriBerita=KategoriBerita::find($id);
        if(empty($KategoriBerita)){
            return redirect(route('kategori_berita.index'));

    }

        return view('kategori_berita.show', compact('KategoriBerita'));
    }

    public function create(){
        return view('kategori_berita.create');
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriBerita::create($input);

        return redirect(route('kategori_berita.index'));

    }

    public function edit($id){
        // $listKategoriArtikel=KategoriArtikel::where('id',$id)-first();//pakai ini klo nma
 
        $kategoriBerita=KategoriBerita::find($id);

        if(empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));
        }
 
        return view ('kategori_berita.edit', compact ('kategoriBerita'));

    }

    public function update($id,Request $request){

        $kategoriBerita=KategoriBerita::find($id);
        $input=$request->all();

        if(empty($kategoriBerita)){
            return redirect(route('kategori_berita.index'));

    }
    $kategoriBerita->update($input);

    return redirect(route('kategori_berita.index'));
}

public function destroy($id){

    $kategoriBerita=KategoriBerita::find($id);


    if(empty($kategoriBerita)){
        return redirect(route('kategori_berita.index'));

}
$kategoriBerita->delete();

return redirect(route('kategori_berita.index'));
}

}
