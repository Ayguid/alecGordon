<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieInGenre extends Model
{
    //
    protected $table = 'movies_in_genres';

    protected $fillable = [
      'movie_id','genre_id'
    ];
    


}
