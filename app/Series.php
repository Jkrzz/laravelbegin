<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }
}

