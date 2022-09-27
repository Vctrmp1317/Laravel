<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$forums=Forum::all();
       // $posts=Posts::latest() ->paginate(5);
        $posts=Post::all();
        dd($posts);
        
    }
}
