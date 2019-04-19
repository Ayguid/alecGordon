<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class LandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }


    public function displayChosenVideo($id)
    {
      $video = Video::find($id);
      return view('displayVideo')->with('video', $video);
    }


}
