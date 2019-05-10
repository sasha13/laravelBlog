<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->published = false;

        $post->save();


        return redirect('/posts');

    }
}
