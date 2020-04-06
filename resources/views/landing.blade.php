@extends('layouts.landing')

@section('content')

  <section id="home-section">

    <div class="over-video">
      <img width="100%" src="{{asset('img/landing/logoLanding.png')}}" alt="">
    </div>

    @php
      // $video = asset('video/LANDING_2020.mp4');
      $video = 'https://player.vimeo.com/video/'."395691905"."?background=1&autoplay=1&loop=1&byline=0&title=0";
    @endphp

    <div id="backgroundVideoContainer">
      {{-- <video preload="none" playsinline autoplay muted loop id="">
        <source src="{{$video}}" type="video/mp4">
        </video> --}}
        {{-- <iframe src="{{$video}}" width="" height=""></iframe> --}}
      </div>

      <div class="vimeo-wrapper">
         <iframe src="{{$video}}"frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
