<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    //
    public function index(){
        $data['artikel'] = Artikel::all();
        return view('artikel.index')->with($data);
    }
    public function search(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['artikel'] = Artikel::where('judul','like',$cari)->orWhere('isi','like',$cari)->orWhere('kategori','like',$cari)->orWhere('penulis','like',$cari)->get();
        
        return view('artikel.index')->with($data);
    }
    public function author($author){
        $data['artikel'] = Artikel::where('penulis','like',$author)->get();
        return view('artikel.index')->with($data);
    }
    public function kat($kat){
        $data['artikel'] = Artikel::where('kategori','like',$kat)->get();
        return view('artikel.index')->with($data);
    }
}
