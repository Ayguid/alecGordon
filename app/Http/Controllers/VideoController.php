<?php

namespace App\Http\Controllers;


use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Video;
use DB;

class VideoController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }



  public function showMyVideos()
  {
    $videos = Video::orderBy('sequence')->get();
    return view('myVideos')->with('videos', $videos);
  }

  public function showAddVideoForm()
  {
    return view('addVideoForm');
  }

  public function validateInputs($request)
  {
    return Validator::make($request->all(),[
      'name' => 'required|max:255',
      // 'description' => 'required',
      // 'genre' => 'required',
      // 'date' => 'required',
      // 'author' => 'required',
      'vimeo_dir' => 'required',
      'still_pic' => 'file|mimes:jpeg,jpg,gif,bmp,png|max:50000',
    ]);
  }

  public function saveVideo(Request $request)
  {
    return DB::transaction(function () use ($request) {

      $validator = $this->validateInputs($request);

      $save = false;
      if ($validator->fails())
      {
        $save = false;
      }
      else if (!$validator->fails())
      {
        $video = new Video($request->all());
        $video->sequence = Video::max('sequence')+1;
        if ($request->still_pic) {

        $video->still_pic= md5(uniqid() . time()) . '.' . $request->still_pic->getClientOriginalExtension();
        // $request->still_pic->storeAs('app/public/uploads/stills', $video->still_pic);
        $request->file('still_pic')->move(public_path("/uploads"), $video->still_pic);
      }
        $save = $video->save();
      }
      if ($save)
      {
        $request->session()->flash('alert-success', 'Added Succesfully!');
        return redirect(route('addVideoForm'));
      }
      else
      {
        $request->session()->flash('alert-danger', 'There was a problem adding your Video!');
        return redirect(route('addVideoForm'))->withInput()->withErrors($validator);
      }
    });
  }


  public function editVideoForm($id)
  {
    $video = Video::find($id);
    return view('editVideoForm')->with('video', $video);
  }


  public function updateVideo(Request $request, $id)
  {
    return DB::transaction(function () use ($request, $id) {
      $validator = $this->validateInputs($request);
      $save = false;
      if ($validator->fails())
      {
        $save = false;
      }
      else if (!$validator->fails())
      {
        $video = Video::find($id);
        if ($request->still_pic) {
          if ($video->still_pic) {
            // code...
            unlink("./uploads/".$video->still_pic);
          }
          $video->still_pic= md5(uniqid() . time()) . '.' . $request->still_pic->getClientOriginalExtension();;
          $request->file('still_pic')->move(public_path("/uploads"), $video->still_pic);
        }
        $video->name=$request->name;
        $video->description=$request->description;
        $video->genre=$request->genre;
        $video->date=$request->date;
        $video->author=$request->author;
        $video->vimeo_dir=$request->vimeo_dir;
        $save = $video->update();
      }
      if ($save)
      {
        $request->session()->flash('alert-success', 'Added Succesfully!');
        return redirect(route('editVideo', $id));
      }
      else
      {
        $request->session()->flash('alert-danger', 'There was a problem adding your Video!');
        return redirect(route('editVideo', $id))->withInput()->withErrors($validator);
      }
    });
  }

  public function deleteVideo(Request $request)
  {
    return DB::transaction(function () use ($request) {
      $video = Video::find($request->id);
      if (unlink("./uploads/".$video->still_pic))
      {
        $video->delete();
        $request->session()->flash('alert-success', 'Removed Succesfully!');
        return redirect(route('showMyVideos'));
      }
      else
      {
        $request->session()->flash('alert-danger', 'There was a problem removing your Video!');
        return redirect(route('showMyVideos'));
      }
    });
  }





  public function saveSeq(Request $request)
  {
    return DB::transaction(function () use ($request) {

    foreach ($request->save_seq as $key => $video) {
      $video = Video::find($video);
      $video->sequence=$key;
      $video->update();
    }
    return $request;
    });
  }

}
