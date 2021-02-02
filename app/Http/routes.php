<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => 'admin','namespace' => 'admin',"middleware"=>"auth"], function () {
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('/category', 'CategoryController');
    Route::resource('/posts', 'PostController');
});
Route::group(['namespace' => 'user'], function () {
    Route::get('/','HomeController@index')->name('user.index');
    Route::get('/{category}/post/{post}',"HomeController@post")->name('user.post');
    Route::get('/category/{category}',"HomeController@category")->name('user.category');
});
Route::auth();