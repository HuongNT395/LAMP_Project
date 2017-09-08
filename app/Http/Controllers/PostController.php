<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function getPostByDay() {
        $posts = Post::orderBy('date','asc')->get();
        return view('postDay',["posts" => $posts]);
    }
}
