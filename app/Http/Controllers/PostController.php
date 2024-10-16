<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view("posts/create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->except("image");
        $input['userid']=Auth::user()->id;
        if($request->hasFile("image"))
        {
         $image=$request->image;
         $extension=$image->getClientOriginalExtension();
         $imagename=uniqid().".$extension";
         $image->move("images/",$imagename);
         $filepath="images/$imagename";
         $input["image"]= $filepath;
        }
        Post::create($input);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
