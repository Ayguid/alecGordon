<div class="row">

@foreach (App\Video::all() as $key => $video)


    <div class="col-sm-6 col-md-4 col-lg-3 mb-4 unselectable fade_in">

    <a href="{{route('displayVideo',$video->id)}}">
      <div class="card_hov">
        <img class="" width="100%" src="{{asset('./uploads/'.$video->still_pic)}}" alt="">
        <div class="overlay">
          <h5>{{$video->name}}</h5> <br>
          <h6>{{$video->description}}</h6> <br>
        </div>
      </div>
    </a>
    </div>
@endforeach


</div>
