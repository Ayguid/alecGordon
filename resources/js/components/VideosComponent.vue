<template>
  <div class="">

  <div id="filterMenu" class="filterMenu">
    <button class="filterButton activa" @click="filter()">ALL</button>
    <button v-for="(genre, index) in genres" class="filterButton" @click="filter(genre)">{{genre.name.toUpperCase()}}</button>
  </div>


  <div class="row">
    <div v-for="(video, index) in filtered_movies" class="col-sm-6 col-md-4 col-lg-4 col-xl-4 m-0 p-0 unselectable">
      <div class="card_hov">
        <img class="" width="100%" :src="$root.baseUrl+'/uploads/'+video.still_pic" alt="">
        <div class="overlay" @click="pushToModal(video)">
          <h5>{{video.name}}</h5>
          <br>
          <h6 v-if="video.description">{{video.description}}</h6> <br>
        </div>
      </div>
    </div>

  </div>


  <div id="myModal" class="modal">
    <div class="modal-data">
      <span id=close-modal class="close-modal">&times;</span>
      <p id="modal-info"></p>
      <div class="videoBox">
        <iframe id="iframePlayer" src="" width="" height="" allow="autoplay; fullscreen" allowfullscreen></iframe>
      </div>
    </div>
  </div>


</div>
</template>

<script>
export default {
  props:['videos', 'genres'],
  data(){
    return{
      movies:this.videos,
      filtered_movies:this.videos
    }
  },
  methods:{
    filter:function(genre){
      this.filtered_movies=this.movies;
      if (genre) {
      //   this.filtered_movies=this.filtered_movies.filter(function(movie) {
      //   return movie.genre_id == genre.id;
      // });
        this.filtered_movies = this.filtered_movies.filter(movie => movie.genres.some(gr => gr.id == genre.id));
        // return resutl;
      }
    },
    pushToModal:function(movie_to_modal){
      const modal_info = document.getElementById('modal-info');
      const modal = document.getElementById('myModal');
      const iframe = document.getElementById('iframePlayer');
      modal.style.display = "block";
      iframe.src="https://player.vimeo.com/video/"+movie_to_modal.vimeo_dir+"?autoplay=1&transparent=false";
      modal_info.innerHTML=movie_to_modal.name;
    }
  },
  mounted() {
    // console.log(this.videos);
    const modal = document.getElementById('myModal');
    const iframe = document.getElementById('iframePlayer');
    const span = document.getElementById("close-modal");
    span.onclick = function() {
      modal.style.display = "none";
      iframe.src="/";
    }
    var btns = document.getElementsByClassName("filterButton");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("activa");
      current[0].className = current[0].className.replace(" activa", "");
      this.className += " activa";
      });
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        iframe.src="/";
      }
    }
  }
}
</script>
