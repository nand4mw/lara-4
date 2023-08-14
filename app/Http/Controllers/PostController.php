<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "blog",
            "posts" =>  Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => Post::find($slug)
        ]);
    }
}
