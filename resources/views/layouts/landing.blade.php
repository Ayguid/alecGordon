<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="base-url" content="{{ url('') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alec Gordon</title>
  <link rel="apple-touch-icon" sizes="57x57" href="./img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicons/favicon-16x16.png">
  <link rel="manifest" href="./img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/alecSS.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- scripts --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
</head>
<body>
  <div id="app">

    <div class="se-pre-con"></div>

    <nav id="navbarA" class="navbarA">
      <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
      </span>
      <a href="#home-section" class="logo">
        <img src="{{asset('img/header/headerLogoNombre.png')}}" alt="" width="100%">
      </a>
      <ul class="main-nav" id="js-menu">
        @if(Auth::user())
          <li>
            <a href="{{route('home')}}" class="nav-links">ADMIN</a>
          </li>
        @endif
        <li>
          <a href="#reel-section" class="nav-links">WORK</a>
        </li>
        <li>
          <a href="#contact" class="nav-links">CONTACT</a>
        </li>
        {{-- <li>
        <a href="#" class="nav-links">About</a>
      </li> --}}
    </ul>
  </nav>

  <main  class="">
    @yield('content')
  </main>


</div>
</body>
</html>
