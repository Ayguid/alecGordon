<div class="row">

@php
  $videos=App\Video::all();
@endphp

@foreach ($videos as $key => $video)
  <div class="col-sm-6 col-md-4 col-lg-3 m-0 p-0 unselectable ">
    <input value="{{$key}}" type="number" name=""  hidden>
    {{-- <a href="{{route('displayVideo',$video->id)}}"> --}}
      <div class="card_hov">
        <img class="" width="100%" src="{{asset('./uploads/'.$video->still_pic)}}" alt="">
        <div class="overlay">
          <h5>{{$video->name}}</h5> <br>
          <h6>{{$video->description}}</h6> <br>
        </div>
      </div>
    {{-- </a> --}}
  </div>
@endforeach


</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-data">
    <span id=close-modal class="close-modal">&times;</span>
    {{-- <p>Some text in the Modal..</p> --}}
    <div class="videoBox">

    <iframe id="iframe" src="" width="" height="" allow="autoplay; fullscreen" allowfullscreen></iframe>
  </div>
  </div>

</div>

<script type="text/javascript">
  var videos = <?php echo $videos ?>;
  var cards = document.getElementsByClassName('unselectable');
  var modal = document.getElementById('myModal');
  var span = document.getElementById("close-modal");
  var iframe = document.getElementById('iframe');
  console.log(span);

  for (var i = 0; i < cards.length; i++) {
    cards[i].addEventListener('click', pushToModal);
  }

  function pushToModal(event){
    // console.log(this.getElementsByTagName('input')[0].value);
    event.preventDefault();
    let sub = this.getElementsByTagName('input')[0].value;
    let movie_to_modal = videos[sub];
    console.log(movie_to_modal);
    modal.style.display = "block";
    iframe.src="https://player.vimeo.com/video/"+movie_to_modal.vimeo_dir;
  }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  iframe.src="/";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    iframe.src="/";
  }
}

</script>
