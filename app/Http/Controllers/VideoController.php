<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;
use App\Comment;
use App\Like;

class VideoController extends Controller
{
    public function index(){
        $videos= Video::all();
        $comments= Comment::all();
     $likes= Like::all();
return view('video',compact('videos','comments','likes'));
    }
}
