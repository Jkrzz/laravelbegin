<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
 public function township(){
     return $this->belongsTo('App\Township');
 }
}
