<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function vocalists(){
        return $this->belongsToMany('App\Vocalist',"vocalists_songs")->withPivot('release_year');
    }
}
