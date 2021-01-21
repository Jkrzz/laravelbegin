<?php

namespace App\Http\Controllers\admin;

use App\admin\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::where('level',1)->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('level',1)->get();
        return view('admin.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $category = new Category();
     $category->name=$request->name;
     if($request->parent==0){
         $category->level=1;
     }
     else{
         $category->level=2;
         $category->parent_id=$request->parent;
     }
     $slug=$request->name;
     $slug=strtolower($slug);
     $slug=str_replace(" ","",$slug);
     $category->slug=$slug;
     $category->save();
    if(isset($request->save)){
    return redirect()->route('admin.category.edit',$category->id);
    }
    else{
        return redirect()->route('admin.category.index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $categories=Category::all();
        $request =Category::find($id);
        return view('admin.category.show',compact('request','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::where('level',1)->get();
        $request=Category::find($id);
        return view('admin.category.edit',compact('categories','request'));
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
        $category = Category::find($id);
     $category->name=$request->name;
     if($request->parent==0){
         $category->level=1;
     }
     else{
         $category->level=2;
         $category->parent_id=$request->parent;
     }
     $slug=$request->name;
     $slug=strtolower($slug);
     $slug=str_replace(" ","",$slug);
     $category->slug=$slug;
     $category->save();
    if(isset($request->save)){
    return redirect()->route('admin.category.edit',$category->id);
    }
    else{
        return redirect()->route('admin.category.index');
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
        Category::find($id)->delete();
        return redirect()->route('admin.category.index');
    }
}