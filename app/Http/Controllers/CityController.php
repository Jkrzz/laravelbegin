<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Township;

class CityController extends Controller
{
   public function index(){
       $city= City::all();
       $townships=Township::all();
       return view('city',compact('city','townships'));
   }
} 
