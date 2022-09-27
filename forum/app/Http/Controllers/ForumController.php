<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumController extends Controller
{
    public function index()
    {
        //$forums=Forum::all();
        $forums=Forum::latest() ->paginate(5);

        return view('forums.index',compact('forums'));
    }

    public function show(Forum $forum)
    {
        $posts = $forum->posts()->with(['owner'])->paginate(2);
      
        return view('forums.detail', compact('forum','posts'));
    }
}
