<?php

namespace App\Http\Controllers;


use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Video;
use App\Genre;
use DB;

class GenreController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }



  public function showGenres()
  {
    $genres = Genre::all();
    return view('myGenres')->with('genres', $genres);
  }


  public function updateVideo(Request $request, $id)
  {
    return DB::transaction(function () use ($request, $id) {

    });
  }



}
