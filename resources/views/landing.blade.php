@extends('layouts.landing')

@section('content')

  <section id="home-section">
    <div class="over-video">
      <div class="row justify-content-md-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
          {{-- <h1>Alec Gordon</h1> --}}
          <img width="100%" src="{{asset('img/landing/logoLanding.png')}}" alt="">
        </div>
      </div>
      {{-- <div class="arrow bounce"> --}}
        {{-- <a href="#reel-section">
          <i class="fa fa-angle-down fa-5x"></i>
        </a> --}}
        <!-- Different arrow options: -->
        <!-- fa fa-arrow-circle-down fa-3x -->
        <!-- fa fa-arrow-down fa-3x -->
        <!-- fa fa-hand-o-down fa-3x -->
        <!-- fa fa-futbol-o fa-3x -->
        <!-- fa fa-sort-desc fa-3x -->
        <!-- fa fa-hand-pointer-o fa-flip-vertical fa-3x -->
        <!-- fa-angle-down -->
        <!-- fa-angle-double-down -->
      {{-- </div> --}}
    </div>
    <div id="backgroundVideoContainer">
      <video playsinline autoplay muted loop id="">
        <source src="{{asset('video/LANDING_2020.mp4')}}" type="video/mp4">
        </video>
      </div>

      <div class="crossfade">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
      </div>
    </section>

    <section id="reel-section">
      {{-- <h2>Some of my work </h2> --}}

        {{-- @foreach (App\Genre::all() as $genre)
          {{$genre->name}}
        @endforeach --}}

      @include('components.movies')

    </section>

    <section id="contact">
      {{-- <h2>Contact</h2> --}}

      @include('components.contact')

    </section>

    <section>

    </section>


  @endsection
