@extends('layouts.main')
@section('konten')
<form action="/post/update/{{ $id }} " method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul" value="{{ $judul }}">
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" aria-label="Default select example" name="kategori">
            <option value="sholat" {{ ($kat=='sholat')?'selected':'' }}>Sholat</option>
            <option value="btq" {{ ($kat=='btq')?'selected':'' }}>Btq</option>
            <option value="pengajian" {{ ($kat=='pengajian')?'selected':'' }}>Pengajian</option>
          </select>
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Isi</label>
        <textarea class="form-control" id="isi" name="isi" rows="3">{{ $isi }}</textarea>
    </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save</button>
</div>
    </form>         
@endsection