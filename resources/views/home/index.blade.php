@extends('layouts.main')
@section('konten')

<div class="container">
   @auth        
   <center> <h3>Selamat Datang {{ auth()->user()->name }}</h3></center>
   @endauth
</div>
@endsection
