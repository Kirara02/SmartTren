<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
class ArtikelController extends Controller
{
    //
    public function index(){
        // $data['artikel'] = [
        //     [
        //         'judul'=>'Siswa tadarus 1hari 1juz',
        //         'kategori'=>'Btq',
        //         'penulis'=>'Fathul Hidayat',
        //         'isi'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A expedita adipisci fugiat minima, molestias neque rerum tenetur blanditiis cum beatae porro iure sed sit similique ducimus, asperiores alias veniam architecto tempora. Dicta excepturi non quia fuga impedit nemo in quae voluptate id recusandae! Sapiente mollitia molestias illum nam ipsa nemo.'
        //     ],
        //     [
        //         'judul'=>'Siswa sholat dhuha',
        //         'kategori'=>'Sholat',
        //         'penulis'=>'Kirara Bernstein',
        //         'isi'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A expedita adipisci fugiat minima, molestias neque rerum tenetur blanditiis cum beatae porro iure sed sit similique ducimus, asperiores alias veniam architecto tempora. Dicta excepturi non quia fuga impedit nemo in quae voluptate id recusandae! Sapiente mollitia molestias illum nam ipsa nemo.'
        //     ]
        //     ];
        $data['artikel'] = Artikel::all();
        return view('artikel.index')->with($data);
    }
    public function home(){
        return view('home.index');
    }
    public function search(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['artikel'] = Artikel::where('judul','like',$cari)->orWhere('isi','like',$cari)->orWhere('kategori','like',$cari)->get();
        
        return view('artikel.index')->with($data);
    }
    public function author($id){
        $data['artikel'] = Artikel::where('penulis','=',$id)->get();
        return view('artikel.author')->with($data);
    }
}
