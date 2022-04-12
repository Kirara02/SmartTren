@extends('layouts.main')
@section('konten')
    <h3>Ini halaman artikel</h3>
    <div class="row mb-3">
        <div class="col-6">
            <form action="/artikel/cari" method="POST">
                @csrf
                <div class="input-group mb-3 ml-2 w-50">
                    <input type="text" class="form-control" name="tcari" id="tcari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="bcari" name="bcari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Artikel
              </button>
        </div>
    </div>
    <h5 id="title">List Artikel :</h5>
    <div class="d-flex">
        @foreach ($artikel as $item)
        <div class="card mx-3" style="width: 18rem;">
            <div class="card-body ml-3">
              <h5 class="card-title">{{ $item['judul'] }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">By: <a href="/artikel/penulis">{{ $item['penulis'] }}</a></h6>
              <p class="card-text">{{ $item['isi'] }}</p>
            </div>
          </div>
        @endforeach
    </div>



    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
@endsection