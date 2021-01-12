<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\People;
use App\Nrc;

class peopleController extends Controller
{
    //
    public function index(){
        $people=People::all();
        $nrcs=Nrc::all();
        return view('people',compact('people','nrcs'));
    }
}
