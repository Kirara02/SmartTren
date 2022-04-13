<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index');
    }
    public function simpan(Request $request){
        User::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'jk'=> $request->jk,
            'alamat'=> $request->alamat,
            'password'=> $request->password,
        ]);
        return redirect('/login');
    }
}
