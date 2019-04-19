@extends('layouts.landing')

@section('content')

  <section id="background-section">
    <div class="over-video">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div id="backgroundVideoContainer">
      <video playsinline autoplay muted loop poster="bg.jpg" id="bgvid">
        <source src="{{asset('video/LANDING.mp4')}}" type="video/mp4">
        </video>
      </div>
    </section>

    <section id="reel-section">
      <h2>Reel Section </h2>

      @include('components.movies')

    </section>



@endsection
