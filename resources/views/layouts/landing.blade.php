<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alec Gordon</title>
  {{-- scripts --}}
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script src="{{ asset('js/nav-bar.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ asset('css/alecSS.css') }}" rel="stylesheet">
  <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div class="se-pre-con"></div>
  <nav class="navbarA">
    <span class="navbar-toggle" id="js-navbar-toggle">
      <i class="fas fa-bars"></i>
    </span>
    <a href="{{route('landing')}}" class="logo">Alec Gordon</a>
    <ul class="main-nav" id="js-menu">
      @if(Auth::user())
        <li>
          <a href="{{route('home')}}" class="nav-links">Admin</a>
        </li>
      @endif
      <li>
        <a href="#" class="nav-links">Contact</a>
      </li>
      <li>
        <a href="#" class="nav-links">About</a>
      </li>
    </ul>
  </nav>

  <main class="">
      @yield('content')
  </main>




  </body>
  </html>
