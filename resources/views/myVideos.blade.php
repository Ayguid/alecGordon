@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">User Dashboard</div>

          <div class="card-body">
            <div class="mb-3">
            <a href="{{route('home')}}">Back to panel</a>
          </div>

            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <div class="mb-3">

            My Videos
          </div>


            @isset($videos)

              <div class="row">


              @foreach ($videos as $key => $video)


                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4 unselectable">
                    <a class="btn btn-primary" href="{{route('editVideo',$video->id)}}">Edit</a> &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href="{{route('displayVideo',$video->id)}}">
                    <div class="card_hov">
                      <img class="" width="100%" src="{{asset('./uploads/'.$video->still_pic)}}" alt="">
                      {{-- <div class="overlay">
                        <h4>{{$video->name}}</h4> <br>
                        <h5>{{$video->description}}</h5> <br>
                      </div> --}}
                    </div>
                  </a>
                  <form class="delete_form" action="{{route('deleteVideo')}}" method="post">
                    {{ csrf_field() }}
                    <input type="number" name="id" value="{{$video->id}}" hidden>
                    <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
                  </form>
                  </div>
              @endforeach
              </div>
            @endisset

            <div class="clearfix"></div>
            <br>
            <br>



          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" >
  window.onload = function() {
    var delete_forms = document.getElementsByClassName('delete_form');

    for (i = 0; i < delete_forms.length; i++) {
      delete_forms[i].addEventListener('submit', function(event){
        event.preventDefault();
        if (confirm('Sure you wannaaa trash it?!')) {
          this.submit();
        }
      });
    }

  }
</script>
@endsection
