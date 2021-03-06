<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }} ">
    <title>SmartTren</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">SmartTren</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          @auth
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/post">Post</a>
              </li>
            </ul>
          </div>
          <div class="d-flex float-end">
            <a class="nav-link mx-2 {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a>
            <a class="nav-link mx-2 " href="/logout">Logout</a>
          </div>
          @else
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
              </li>
            </ul>
          </div>
          <div class="d-flex float-end">
            <a class="nav-link mx-2 {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">Daftar</a>
            <a class="nav-link mx-2 {{ Request::is('login') ? 'active' : '' }}" href="/login">Login</a>
          </div>
          @endauth
        </div>
      </nav>
      
    @yield('konten')

    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js') }}" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>