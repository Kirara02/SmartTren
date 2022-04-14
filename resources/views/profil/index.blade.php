@extends('layouts.main')
@section('konten')
    @foreach ($profil as $item)
    {{-- <center>
    <div class="card bg-light mx-3 col-md-3 my-4">
        <p>
            nama: {{ $item['name'] }} <br>
            email: {{ $item['email'] }} <br>
            jk: {{ $item['jk'] }} <br>
            alamat: {{ $item['alamat'] }}
        </p>
    </div>
</center> --}}
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img
                  src="https://www.kibrispdr.org/data/wallpaper-takiya-genji-21.jpg"
                  alt="Avatar"
                  class="img-fluid my-5 rounded-circle"
                  style="width: 120px;"
                />
                <h6 class="text-dark">{{ $item['name'] }}</h6>
                <button type="button" class="badge bg-primary " data-bs-toggle="modal" data-bs-target="#editProfil">
                    Edit
                  </button>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Nama</h6>
                      <p class="text-muted">{{ $item['name'] }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{ $item['email'] }}</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Jenis Kelamin</h6>
                      <p class="text-muted">{{ ($item['jk']=='L') ? 'Laki-laki':'Perempuan' }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Alamat</h6>
                      <p class="text-muted">{{ $item['alamat'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="editProfil" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            <form action="{{ url('profil/ubah') }}" method="post" class="center">
                @csrf
                <div class="form-group w-75 mt-2 ">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $item['name'] }}">
                </div>
                <div class="form-group w-75 mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $item['email'] }}">
                </div>
                <div class="form-group w-50 mt-2">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $item['alamat'] }}</textarea>
                </div>
                <div class="form-group w-50 mt-2">
                    <label for="jk" class="form-label">jenis Kelamin</label>
                    <select class="form-select" name="jk" aria-label="Default select example">
                        <option value="L" {{ ($item['jk']=='L')?'selected':'' }}>Laki-laki</option>
                        <option value="P" {{ ($item['jk']=='P')?'selected':'' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-3 mb-2">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-center" name="simpan">Edit</button>
                    </div>
                </div>  
            </form>        
        </div>
      </div>
    </div>
    @endforeach
@endsection