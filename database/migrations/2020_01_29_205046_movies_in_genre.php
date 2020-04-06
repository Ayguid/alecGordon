<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoviesInGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_in_genres', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('movie_id');
          $table->bigInteger('genre_id');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies_in_genres', function (Blueprint $table) {
            //
        });
    }
}
