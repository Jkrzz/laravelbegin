<?php



Route::get('/',function(){
    return view('Home');
});
Route::get('/about',function(){
    return view("about");
});