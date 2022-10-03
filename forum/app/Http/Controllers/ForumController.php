<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::with(['replies', 'posts'])->paginate(5);


        return view('forums.index',compact('forums'));
    }

    public function show(Forum $forum) //Con esto estamos inyectando
    {
        $posts = $forum->posts()->with(['owner'])->paginate(10);
      
        return view('forums.detail', compact('forum','posts'));
    }
}
