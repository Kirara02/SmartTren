@extends('layouts.main')
@section('konten')
<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white"><center><h4>Login</h4></center></div>
        <div class="card-body">
            <form action="{{ url('/login/proses') }}" method="post">
            @csrf
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" autocomplete="off">
            </div>
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off">
            </div>
            <div class="form-group mt-3 mb-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-center" name="simpan">LOGIN</button>
                </div>
            </div>
            <a href="/daftar">Register</a>  
            </form>
        </div>
    </div>
</div>
    
@endsection