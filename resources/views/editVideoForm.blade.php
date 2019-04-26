@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">User Dashboard</div>

          <div class="card-body">
            <a href="{{route('showMyVideos')}}">Back to my Videos</a>
            {{-- @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif --}}
        @if(Session::has('alert-success'))
          <div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> <strong>{!! session('alert-success') !!}</strong></div>
        @endif
        @if(Session::has('alert-danger'))
          <div class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i> <strong>{!! session('alert-danger') !!}</strong></div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="">
          <form method="POST" action="{{route('updateVideo', $video->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$video->name}}" required autocomplete="name" autofocus>

                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

              <div class="col-md-6">
                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{$video->description}}" required autocomplete="description">

                @if ($errors->has('description'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

              <div class="col-md-6">
                <input id="genre" type="text" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" name="genre" required autocomplete="genre" value="{{$video->genre}}">
                @if ($errors->has('genre'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('genre') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

              <div class="col-md-6">
                <input id="date" type="text" class="form-control" name="date" required autocomplete="date" value="{{$video->date}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

              <div class="col-md-6">
                <input id="author" type="text" class="form-control" name="author" required autocomplete="author" value="{{$video->author}}">
              </div>
            </div>

            <div class="form-group">
              <label for="still_pic" class="col-md-4 col-form-label text-md-right">{{ __('Still Pic') }}</label>
              <input type="file" name="still_pic" class="form-control {{ $errors->has('still_pic.0') ? ' is-invalid' : '' }}"  >
              @if ($errors->has('still_pic.0'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('still_pic.0') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group row">
              <label for="vimeo_dir" class="col-md-4 col-form-label text-md-right">{{ __('Vimeo Dir') }}</label>

              <div class="col-md-6">
                <input id="date" type="text" class="form-control" name="vimeo_dir" required autocomplete="vimeo_dir" value="{{$video->vimeo_dir}}">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('SAVE') }}
                </button>
              </div>
            </div>
          </form>
        </div>
        <br>
        <br>



      </div>
    </div>
  </div>
</div>
</div>
@endsection
