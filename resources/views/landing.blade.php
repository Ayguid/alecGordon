@extends('layouts.landing')

@section('content')

  <section id="home-section">

    <div class="over-video">
      <img width="100%" src="{{asset('img/landing/logoLanding.png')}}" alt="">
    </div>

    <div id="backgroundVideoContainer">
      <video preload="none" playsinline autoplay muted loop id="">
        <source src="{{asset('video/LANDING_2020.mp4')}}" type="video/mp4">
        </video>
      </div>

      {{-- <div class="crossfade">
      <figure></figure>
      <figure></figure>
      <figure></figure>
      <figure></figure>
      <figure></figure>
      <figure></figure>
      <figure></figure>
    </div> --}}
  </section>

  <section id="reel-section">
    @include('components.movies')
  </section>

  <section id="contact">
    @include('components.contact')
  </section>




@endsection
