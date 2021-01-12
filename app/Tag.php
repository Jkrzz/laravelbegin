<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
      public function movies(){
          return $this->morphedByMany('App\Movie','taggable');
      }
      public function series(){
        return $this->morphedByMany('App\Series','taggable');
    }
}
