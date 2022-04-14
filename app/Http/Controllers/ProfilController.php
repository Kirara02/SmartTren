<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    //
    public function index(){
        $data['profil'] = User::where('id','=', auth()->user()->id)->get();
        return view('profil.index')->with($data);
    }
    public function edit(Request $req){
        $id = auth()->user()->id;
        User::where('id',$id)->update([
            'name'=>$req->nama,
            'email'=>$req->email,
            'jk'=>$req->jk,
            'alamat'=>$req->alamat,
        ]);
        return redirect('profil');
    }
}