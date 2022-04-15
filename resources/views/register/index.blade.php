@extends('layouts.main')
@section('konten')
<div class="container-sm w-50 mt-5 rounded ">
    <div class="card">
        <div class="card-header bg-primary text-white">Register Form</div>
        <div class="card-body">
            <form action="{{ url('daftar/simpan') }}" method="post" class="center">
            @csrf
            <div class="form-group w-75 mt-3 ">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group w-75">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="123@gmail.com" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group w-50">
                <label for="jk" class="form-label">jenis Kelamin</label>
                <select class="form-select" name="jk" aria-label="Default select example">
                    <option selected>Pilih</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group w-50">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off">
            </div>
            <div class="form-group mt-3 mb-2">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-center" name="simpan">Tambah data</button>
                </div>
            </div>  
        </form>
        </div>
    </div>
</div>
@endsection