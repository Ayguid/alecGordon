@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Settings</div>
                <div class="mb-3">
                  <a class="btn btn-primary" href="{{route('home')}}">Back to panel</a>
                </div>
                <div class="card-body">

                  @isset($data)
                    {{-- {{dd($data['backVid'])}} --}}
                    @if(Session::has('alert-success'))
                      <div class="alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> <strong>{!! session('alert-success') !!}</strong></div>
                    @endif
                    @if(Session::has('alert-danger'))
                      <div class="alert alert-danger"><i class="fa fa-times" aria-hidden="true"></i> <strong>{!! session('alert-danger') !!}</strong></div>
                    @endif
                    <div class="">

                      <form class="" action="{{route('setVid')}}" method="post">
                        @csrf
                        <label for="backVid">Just nr Of Vid!!!</label>
                        <input type="text" name="backVid" value="{{$data['backVid']}}">
                        <button type="submit" name="button">Save</button>
                      </form>

                    </div>


                  @endisset

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
