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

            My Genres
          </div>


            @isset($genres)

              <div class="row">


              @foreach ($genres as $key => $genre)

                {{-- {{$genre}} --}}
                <div class="col-6">

                <h5>{{$genre->name}}</h5>
                <a href="#">Edit</a>
                <br>
                <br>
              </div>

                  {{-- <div class="col-sm-6 col-md-4 col-lg-3 mb-4 unselectable">
                    <a class="btn btn-primary" href="{{route('editVideo',$video->id)}}">Edit</a> &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href="{{route('displayVideo',$video->id)}}">
                    <div class="card_hov">
                      <img class="" width="100%" src="{{asset('./uploads/'.$video->still_pic)}}" alt="">
                    </div>
                  </a>
                  <form class="delete_form" action="{{route('deleteVideo')}}" method="post">
                    {{ csrf_field() }}
                    <input type="number" name="id" value="{{$video->id}}" hidden>
                    <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
                  </form>
                  </div> --}}
              @endforeach
              </div>
            @endisset

            <div class="clearfix"></div>

            {{-- <a class="btn btn-primary" href="#">Add Genre</a> --}}

            <p>
            {{-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add Genre
            </a> --}}
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Add Genre
            </button>
          </p>
          <div class="collapse" id="collapseExample">

            <div class="card card-body">

              <form class="delete_form" action="#" method="post">
                {{ csrf_field() }}
                {{-- <input type="number" name="id" value="{{$video->id}}" hidden> --}}
                <input type="text" name="name" value="">
                <input class="btn btn-danger" type="submit" name="Add" value="Save">
              </form>


            </div>

          </div>



            <br>
            <br>



          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" >
  // window.onload = function() {
  //   var delete_forms = document.getElementsByClassName('delete_form');
  //
  //   for (i = 0; i < delete_forms.length; i++) {
  //     delete_forms[i].addEventListener('submit', function(event){
  //       event.preventDefault();
  //       if (confirm('Sure you wannaaa trash it?!')) {
  //         this.submit();
  //       }
  //     });
  //   }
  //
  // }
</script>
@endsection
