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
    // public function author($id){
    //     $data['artikel'] = Artikel::where('penulis','=',$id)->get();
    //     return view('artikel.author')->with($data);
    // }
    public function create(Request $req){
        Artikel::create([
            'judul'=> $req->judul,
            'kategori'=> $req->kategori,
            'penulis'=> $req->penulis,
            'isi'=> $req->isi
        ]);
        return redirect('/artikel');
    }
}
