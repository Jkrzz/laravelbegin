<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function setslugAttribute($value){
        $slug=$value;
        $slug=strtolower($slug);
        $slug=str_replace(" ","",$slug);
        $this->attributes['slug']=$slug;
    }
}