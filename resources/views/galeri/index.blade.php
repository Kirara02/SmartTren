@extends('layouts.main')
@section('konten')
    <h3>Ini halaman galeri</h3>
    <div class="row mb-3">
        <div class="col-6">
            <form action="/galeri/cari" method="POST">
                @csrf
                <div class="input-group mb-3 ml-2 w-50">
                    <input type="text" class="form-control" name="tcari" id="tcari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="bcari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex">
        @foreach ($galeri as $item)
        <div class="card mx-4" style="width: 18rem;">
            <img src="{{ asset('img/'.$item['gambar']) }}" class="card-img-top" alt="..." width="300" height="200">
            <div class="card-body">
              <h4 class="card-text">{{ $item['judul'] }}</h4>
            </div>
          </div>
        @endforeach
    </div>
@endsection