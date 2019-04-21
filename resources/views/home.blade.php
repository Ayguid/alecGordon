@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">

                    You are logged in as <strong>The ALEC!</strong>
                  </div>

                    <div class="">
                      <a class="btn btn-primary" href="{{route('showMyVideos')}}">Mi videos</a>
                      <br>
                      <br>
                      <a class="btn btn-primary" href="{{route('addVideoForm')}}">Add Video/Material</a>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
