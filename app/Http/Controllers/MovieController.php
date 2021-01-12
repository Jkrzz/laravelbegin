<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Movie;
use App\Series;
use App\Tag;
class MovieController extends Controller
{
    public function index(){
        $movies=Movie::all();
        $series=Series::all();
        $tags=Tag::all();
        return view('movie',compact('movies','series','tags'));
    }
}
