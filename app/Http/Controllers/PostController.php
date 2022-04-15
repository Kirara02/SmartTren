<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
;
class PostController extends Controller
{
    //
    public function index(){
        $id = auth()->user()->name;
        $data['posts'] = Artikel::where('penulis','=',$id)->get();
        return view('posts.post')->with($data);
    }
    public function create(Request $req){
        Artikel::create([
            'judul'=> $req->judul,
            'kategori'=> $req->kategori,
            'penulis'=> $req->penulis,
            'isi'=> $req->isi
        ]);
        return redirect('/post');
    }
    public function delete($id){
        Artikel::where('id','=',$id)->delete();
        return back();
    }
    public function getUbah($id){
        $row = Artikel::find($id);
        $data = [
            "judul"=>$row->judul,
            "kat"=>$row->kategori,
            "isi"=>$row->isi,
            "id"=>$row->id,
        ];
        //  JSON_encode($data);
        return view('posts.edit')->with($data);
    }
    public function edit($id, Request $req){
        Artikel::where('id',$id)->update([
            'judul'=>$req->judul,
            'kategori'=>$req->kategori,
            'isi'=>$req->isi
        ]);
        return redirect('/post');
    }
}
