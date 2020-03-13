<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="base-url" content="{{ url('') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alec Gordon</title>
  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ asset('css/alecSS.css') }}" rel="stylesheet">
  <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- scripts --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script type="text/javascript" src="{{ asset('js/loader.js') }}"></script>
</head>
<body>
  <div id="app">

  <div class="se-pre-con"></div>

  <nav id="navbarA" class="navbarA">
    <span class="navbar-toggle" id="js-navbar-toggle">
      <i class="fas fa-bars"></i>
    </span>
    <a href="{{route('landing')}}" class="logo">
      <img src="{{asset('img/header/headerLogoNombre.png')}}" alt="" width="100%">
    </a>
    <ul class="main-nav" id="js-menu">
      @if(Auth::user())
        <li>
          <a href="{{route('home')}}" class="nav-links">Admin</a>
        </li>
      @endif
      <li>
        <a href="#reel-section" class="nav-links">Work</a>
      </li>
      <li>
        <a href="#contact" class="nav-links">Contact</a>
      </li>
      {{-- <li>
        <a href="#" class="nav-links">About</a>
      </li> --}}
    </ul>
  </nav>

  <main  class="">
      @yield('content')
  </main>


    </div>
  </body>
  {{-- <script src="{{ asset('js/nav-bar.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/scroll.js') }}"> </script> --}}
  </html>

  <script type="text/javascript">
  (function(document, history, location) {
    var HISTORY_SUPPORT = !!(history && history.pushState);

    var anchorScrolls = {
      ANCHOR_REGEX: /^#[^ ]+$/,
      OFFSET_HEIGHT_PX: 70,

      /**
      * Establish events, and fix initial scroll position if a hash is provided.
      */
      init: function() {
        this.scrollToCurrent();
        window.addEventListener('hashchange', this.scrollToCurrent.bind(this));
        document.body.addEventListener('click', this.delegateAnchors.bind(this));
      },

      /**
      * Return the offset amount to deduct from the normal scroll position.
      * Modify as appropriate to allow for dynamic calculations
      */
      getFixedOffset: function() {
        return this.OFFSET_HEIGHT_PX;
      },

      /**
      * If the provided href is an anchor which resolves to an element on the
      * page, scroll to it.
      * @param  {String} href
      * @return {Boolean} - Was the href an anchor.
      */
      scrollIfAnchor: function(href, pushToHistory) {
        var match, rect, anchorOffset;

        if(!this.ANCHOR_REGEX.test(href)) {
          return false;
        }

        match = document.getElementById(href.slice(1));

        if(match) {
          rect = match.getBoundingClientRect();
          anchorOffset = window.pageYOffset + rect.top - this.getFixedOffset();
          window.scrollTo(window.pageXOffset, anchorOffset);

          // Add the state to history as-per normal anchor links
          if(HISTORY_SUPPORT && pushToHistory) {
            history.pushState({}, document.title, location.pathname + href);
          }
        }

        return !!match;
      },

      /**
      * Attempt to scroll to the current location's hash.
      */
      scrollToCurrent: function() {
        this.scrollIfAnchor(window.location.hash);
      },

      /**
      * If the click event's target was an anchor, fix the scroll position.
      */
      delegateAnchors: function(e) {
        var elem = e.target;

        if(
        elem.nodeName === 'A' &&
        this.scrollIfAnchor(elem.getAttribute('href'), true)
        ) {
          e.preventDefault();
        }
      }
    };

    window.addEventListener(
    'DOMContentLoaded', anchorScrolls.init.bind(anchorScrolls)
    );
  })(window.document, window.history, window.location);

</script>
