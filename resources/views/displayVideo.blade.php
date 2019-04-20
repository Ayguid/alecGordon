@extends('layouts.landing')

@section('content')

<div class="display_background">


  <div class="videoBox">
    <iframe src="{{"https://player.vimeo.com/video/".$video->vimeo_dir}}" allow="autoplay; fullscreen" allowfullscreen></iframe>
    {{-- <a href="{{route('landing')}}">Back</a> --}}
  </div>
  <div class="videoBoxInfo">
  <h4>{{$video->name}}</h4> <br>
  <h5>{{$video->description}}</h5> <br>
</div>
@include('components.movies')
</div>


@endsection
