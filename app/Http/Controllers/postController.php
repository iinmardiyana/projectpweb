<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    public function index()
    {
        return view('home',[
            "title" => "Home",
            // "posts" => post::all() #bikin function model
            "posts" => post::latest()->get()
        ]);
    }

    // public function show(post $post)
    // {
    //     return view('post', [
    //         "title" => "New Post",
    //         "posts" => $post
    //     ]);
    // }
    public function show(post $posts)
    {
        return view('post', [
            "title" => "New Post",
            "post" => $posts
        ]);
    }
}
