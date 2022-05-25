<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $mydata = Post::all();

        return view('posts', [
            "title" => "My Blog Post",
            "data" => $mydata
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "View Post",
            "data" => Post::find($slug),
        ]);
    }
}
