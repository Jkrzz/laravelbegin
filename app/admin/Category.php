<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function childs(){
        return $this->hasMany(Category::class,'parent_id');
    }
    public function getRouteKeyName(){
        return 'name';
    }
}