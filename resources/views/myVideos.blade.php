


@extends('layouts.app')



<script src="{{ asset('js/dragAndDrop/redips-drag-min.js') }}"></script>

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


            <button id="save_seq" type="button" class="btn btn-primary" name="button">Save Sequence</button>
            <a class="btn btn-warning" href="{{route('showMyVideos')}}">Cancel Changes</a>
            <br>
            <br>
            <br>



            <center>
              @isset($videos)
                <div id="redips-drag">

                  <table id="table1">

                    {{-- <colgroup>
                    <col width="100"/>
                    <col width="100"/>
                    <col width="100"/>
                    <col width="100"/>
                  </colgroup> --}}
                  <tbody>

                    <tr>

                      @foreach ($videos as $key => $video)
                        @if ($key % 3 == 0)</tr><tr>@endif

                          <td>
                            <div class="hideBorder redips-drag">

                              <div class="">

                                <a class="btn btn-primary" href="{{route('editVideo',$video->id)}}">Edit</a>

                                <form class="delete_form btn" action="{{route('deleteVideo')}}" method="post">
                                  {{ csrf_field() }}
                                  <input class="video_id" type="number" name="id" value="{{$video->id}}" hidden>
                                  <input class="btn btn-danger" type="submit" name="Delete" value="Delete">
                                </form>
                              </div>


                              <img width="100%" src="{{asset('./uploads/'.$video->still_pic)}}" alt="">
                            </div>
                          </td>
                        @endforeach

                      </tr>

                    </tbody>
                  </table>
                </div>
              @endisset
            </center>



          </div>
        </div>
      </div>
    </div>
  </div>
  @php
  $route =  route('saveSeq');
@endphp
<script src="{{ asset('js/dragAndDrop/script.js') }}"></script>

<script type="text/javascript" >
var route = <?php echo json_encode($route)?>;

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

  var save_seq = document.getElementById('save_seq');


  save_seq.onclick=function(){
    var seqs  = [];
    var ids= document.getElementsByClassName('video_id');

    for (var i = 0; i < ids.length; i++) {
      seqs.push(ids[i].value);
    }

    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    (async () => {
      const rawResponse = await fetch(route, {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({save_seq: seqs})
      });

      const content = await rawResponse.json();

      console.log(JSON.stringify(content));
    })();

  }


}
</script>
@endsection
