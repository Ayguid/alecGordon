@extends('layouts.landing')

@section('content')

  <section id="background-section">
    <div class="over-video">
      <div class="">
        <h1>Alec Gordon</h1>
      </div>
        <div class="arrow bounce">
        <a href="#reel-section">
          <i class="fa fa-angle-down fa-5x"></i>
        </a>
        <!-- Different arrow options: -->
<!-- fa fa-arrow-circle-down fa-3x -->
<!-- fa fa-arrow-down fa-3x -->
<!-- fa fa-hand-o-down fa-3x -->
<!-- fa fa-futbol-o fa-3x -->
<!-- fa fa-sort-desc fa-3x -->
<!-- fa fa-hand-pointer-o fa-flip-vertical fa-3x -->
<!-- fa-angle-down -->
<!-- fa-angle-double-down -->
        </div>
    </div>
    <div id="backgroundVideoContainer">
      <video playsinline autoplay muted loop poster="bg.jpg" id="bgvid">
        <source src="{{asset('video/LANDING.mp4')}}" type="video/mp4">
        </video>
      </div>
    </section>

    <section id="reel-section">
      <h2>Some of my work </h2>

      @include('components.movies')

    </section>



@endsection
