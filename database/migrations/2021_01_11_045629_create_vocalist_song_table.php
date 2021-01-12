<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVocalistSongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vocalists_songs', function (Blueprint $table) {
            $table->unsignedInteger('vocalist_id');
            $table->unsignedInteger('song_id');
            $table->unsignedInteger('release_year');
            $table->timestamps();
            $table->foreign('vocalist_id')->references('id')->on('vocalists');
            $table->foreign('song_id')->references('id')->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vocalists_songs');
    }
}
