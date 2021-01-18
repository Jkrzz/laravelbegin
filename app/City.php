<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $fillable=['name'];
  public function townships(){
      return $this->hasMany('App\Township');
  }
  public function street(){
    return $this->hasManyThrough('App\Street','App\Township');
  }
}