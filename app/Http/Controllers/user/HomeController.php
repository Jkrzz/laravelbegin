<?php

namespace App\Http\Controllers\user;

use App\admin\Category;
use App\admin\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::orderBy('id',"desc")->paginate(1);
        return view('user.home', compact('posts'));
    }
    public function post($category,post $post){
        return view('user.post', compact('post'));
    }
    public function category(Category $category){
        $posts=Post::where('category_id',$category->id)->paginate(1);
        return view('user.home', compact('posts'));
    }
}