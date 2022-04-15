@extends('layouts.main')
@section('konten')
<center> <h3>Posts</h3></center>
    <div class="row mb-3 ">
        <div class="col">
            <button type="button" class="btn btn-primary float-start ms-3 " data-bs-toggle="modal" data-bs-target="#artikelPost">
                Tambah Artikel
              </button>
            </div>
        <div class="col-4 float-end me-3">
            <form action="/artikel/cari" method="POST" class="">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="tcari" id="tcari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="bcari" name="bcari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row ms-3">
        <div class="col-6"> 
            <h3>List Posts</h3>
            <ul class="list-group-numbered">
                @foreach($posts as $post)
                <li class="list-group-item">
                    <?= $post['judul'] ?>
                    <a href="/post/detail/{{ $post['id'] }}" class="badge bg-primary float-end mx-2">detail</a>
                    <a href="/post/ubah/{{ $post['id'] }}" class="badge bg-success float-end mx-2">Edit</a>           
                    {{-- <a href="/post/edit" class="badge bg-success float-end mx-2 ubahArtikel" id="tampilModalTambah" 
                    data-bs-toggle="modal" data-bs-target="#artikelPost" data-id="{{ $post['id'] }}">Edit</a>            --}}
                    <a href="/post/hapus/{{ $post['id'] }}" class="badge bg-danger float-end mx-2" 
                    onclick="return confirm('yakin?')">hapus</a>
                </li>
                @endforeach
            </ul>
        </div>
</div>


    <div class="modal fade" id="artikelPost" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Tambah Artikel</h5>
            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
                <form action="{{ url('/post/buat') }}" method="post">
                @csrf
                <input type="hidden" name="penulis" value="{{ $post['penulis'] }}">
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