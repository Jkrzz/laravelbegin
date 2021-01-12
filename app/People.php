<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    public function nrc(){
      return  $this->hasOne('App\Nrc');
    }
}
