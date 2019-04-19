@extends('layouts.landing')

@section('content')

<div class="display_background">


  <div class="videoBox">
    <iframe src="{{"https://player.vimeo.com/video/".$video->vimeo_dir}}" width="" height="" allow="autoplay; fullscreen" allowfullscreen></iframe>
    <h4>{{$video->name}}</h4> <br>
    <h5>{{$video->description}}</h5> <br>
    {{-- <a href="{{route('landing')}}">Back</a> --}}
  </div>
  @include('components.movies')
</div>


@endsection
