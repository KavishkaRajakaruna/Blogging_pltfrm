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

    public function store(){
        $data = request() ->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:15',
        ]);

        $post = new Post;
        $post -> title = request('title');
        $post -> author = request('author');
        $post -> body = request('body');
        $post -> save();
        return redirect('posts');

    }

}
