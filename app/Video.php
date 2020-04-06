<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\MovieInGenre;

class Video extends Model
{

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  // public $genres;

  protected $fillable = [
    'name', 'description', 'date', 'author', 'still_pic', 'vimeo_dir', 'sequence'
  ];

  // public function __construct()
  // {
  //   $this->genres = $this->isInGenres();
  // }

  public function isInGenres()
  {
    return $this->hasManyThrough(Genre::class, MovieInGenre::class, 'movie_id', 'id', 'id', 'genre_id')->get()->unique('id');
  }

  public function checkIfInGenre($genreId)
  {
    return $this->isInGenres()->where('id', $genreId)->count();
  }


  public function myGenres()
  {
    return $this->hasMany(MovieInGenre::class, 'movie_id', 'id');
  }




}
