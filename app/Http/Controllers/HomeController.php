<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth::user()->id;
        $post=Post::where("userid",$id)->get();
        return view('home',compact('post'));
    }

    function allposts()
    {
        $posts=Post::with('users')->get();
        return view ("welcome",compact("posts"));
    }
}
