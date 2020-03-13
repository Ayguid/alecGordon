


@php
$genres=App\Genre::all();
$videos=App\Video::orderBy('sequence')->get();
@endphp

<videos-component :videos="{{$videos}}" :genres="{{$genres}}"/>
