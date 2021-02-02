<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   public function category(){
    return $this->belongsTo(Category::class);
}
    public function setslugAttribute($value){
        $slug=$value;
        $slug=strtolower($slug);
        $slug=str_replace(" ","",$slug);
        $this->attributes['slug']=$slug;
    }
    public function getimageAttribute($value){
        return asset("images/".$value);
    }
    public function getRouteKeyName(){
        return "slug";
    }
}