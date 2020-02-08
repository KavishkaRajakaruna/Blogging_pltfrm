<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function list(){
        $posts = Post::all();

        return view('internal/blog', [
            'posts' => $posts
            ]);
    }

}
