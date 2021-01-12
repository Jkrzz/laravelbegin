<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocalist extends Model
{
    public function songs(){
        return $this->belongsToMany('App\Song',"vocalists_songs")->withPivot('release_year');
    }
}
