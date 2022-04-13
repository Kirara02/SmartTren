@extends('layouts.main')
@section('konten')
<center> <h3>Artikel</h3></center>
    <div class="row mb-3">
        <div class="col ">
            <form action="/artikel/cari" method="POST" class="float-end">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="tcari" id="tcari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="bcari" name="bcari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Artikel
              </button>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary float-end tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal">
                Ubah Artikel
              </button>
        </div>
    </div> --}}
    <h5 id="title">List Artikel :</h5>
    <div class="row g-4 mx-4">
        @foreach ($artikel as $item)
        <div class="card bg-light mx-3 col-md-5 " style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $item['judul'] }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">By: <a href="/artikel/penulis">{{ $item['penulis'] }}</a></h6>
              <p class="card-text">{{ substr($item['isi'],0,150)}}.....<br><a href="#"> baca selengkapnya</a> </p>
            </div>
          </div>
        @endforeach
    </div>


    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
                <form action="{{ url('/artikel/buat') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option selected>Pilih Kategori</option>
                        <option value="sholat">Sholat</option>
                        <option value="btq">Btq</option>
                        <option value="pengajian">Pengajian</option>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" name="penulis" placeholder="Masukan Penulis">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>               
          </div>
        </div>
      </div>
@endsection