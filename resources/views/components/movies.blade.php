


@php
$genres=App\Genre::all();
$videos=App\Video::orderBy('sequence')->get();
$videos->each(function($vid){
  $vid->genres = $vid->isInGenres();
});
@endphp

<videos-component :videos="{{$videos}}" :genres="{{$genres}}"/>
