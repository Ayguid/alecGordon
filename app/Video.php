<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */


  protected $fillable = [
    'name', 'description', 'genre', 'date', 'author', 'still_pic', 'vimeo_dir'
  ];





}
