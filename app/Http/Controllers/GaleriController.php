<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
class GaleriController extends Controller
{
    //
    public function index(){
        $data['galeri'] = Galeri::all();
        return view('galeri.index')->with($data);
    }
    public function search(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['galeri'] = Galeri::where('judul','like',$cari)->get();
        
        return view('galeri.index')->with($data);
    }
}
