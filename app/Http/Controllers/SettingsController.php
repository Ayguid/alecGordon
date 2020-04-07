<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function index()
    {
      $jsonString = file_get_contents(base_path('resources/settings.json'));
      $data = json_decode($jsonString, true);

      return view('settings')->with('data', $data);
    }


    public function setVid(Request $request)
    {
      // dd($request);
      // Read File
      $jsonString = file_get_contents(base_path('resources/settings.json'));
      $data = json_decode($jsonString, true);
      // Update Key
      $data['backVid'] = $request->backVid;
      // Write File
      $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
      file_put_contents(base_path('resources/settings.json'), stripslashes($newJsonString));
      $request->session()->flash('alert-success', 'Updated Succesfully!');
      // Get Key Value
      return redirect(route('indexSettings'));
    }


}
