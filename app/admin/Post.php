<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use App\admin\Category;

class Post extends Model
{
    public function setslugAttribute($value){
      $slug =$value;
      $slug=strtolower($slug);
      $slug=str_replace(" ","",$slug);
      $this->attributes['slug']=$slug;
    }
    public function category(){
      return $this->belongsTo(Category::class,'category_id');
    }
}