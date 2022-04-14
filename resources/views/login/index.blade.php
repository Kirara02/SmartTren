@extends('layouts.main')
@section('konten')
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white"><center><h4>SmartTren</h4></center></div>
        <div class="card-body">
            <form action="{{ url('/login/auth') }}" method="post">
            @csrf
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" autocomplete="off" value="{{ old('email') }}">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off">
            </div>
            {{ session()->get('Gagal'); }}
            @error('email','password')
                Silahkan input email dan password yang benar
            @enderror
            <center>
            <div class="form-group mt-4 mb-2">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-center w-50" name="simpan">Login</button>
                </div>
            </div></center>
            <center><a href="/daftar">Register</a></center>  
            </form>
        </div>
    </div>
</div>
    
@endsection