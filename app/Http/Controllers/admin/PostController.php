<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\admin\Category;
use App\admin\Post;
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
        $categories=Category::all();
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
        $file=$request->file('image');
        $name=$file->getClientOriginalName();
        $file->move('images',$name);
        $post=new Post();
        $post->title=$request->title;
        $post->image=$name; 
        $post->description=$request->description;
        $post->category_id=$request->category;
        $post->slug=$request->title;
        $post->save();
        if(isset($request->save)){
            return redirect()->route('admin.posts.edit',$post->id);
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
        $post=Post::find($id);
        return view('admin.posts.show',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post=Post::find($id);
        $categories=Category::all();
        return view('admin.posts.edit',compact('categories','post'));
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
        $post=Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $file=$request->file('image');
        if($file){
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
        }
        else{
            $name=$post->image;
        }
        $post->image=$name;
        $post->category_id=$request->category;
        $post->slug=$request->title;
        $post->save();
        if(isset($request->save)){
            return redirect()->route('admin.posts.edit',$post->id);
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