<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function contact(){
        return view ('contact');
    }
    public function post($id,$name){
        return view ('post',compact('id','name'));
    }
}
