<?php

namespace App\Http\Controllers\admin;

use App\admin\Category;
use App\admin\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $posts=new Post();
        $posts->title = $request->title;
        $posts->description = $request->description;
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move('images',$name);
        $posts->image=$name;
        $posts->category_id = $request->category;
        $posts->slug =$request->title;
        $posts->save();
        if(isset($request->save)){
            return redirect()->route('admin.posts.edit',$posts->id);
            }
            else{
                return redirect()->route('admin.posts.index');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Category::all();
        $request=Post::find($id);
        return view('admin.posts.show' ,compact('request','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $request=Post::find($id);
        return view('admin.posts.edit' ,compact('request','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts=Post::find($id);
        $posts->title = $request->title;
        $posts->description = $request->description;
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move('images',$name);
        $posts->image=$name;
        $posts->category_id = $request->category;
        $posts->slug =$request->title;
        $posts->save();
        if(isset($request->save)){
            return redirect()->route('admin.posts.edit',$posts->id);
            }
            else{
                return redirect()->route('admin.posts.index');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
}