<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CommentsController extends Controller
{
    public function store($id)
    {
        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);

        $post = Post::find($id);

        $post->addComment(request('body'));


        return back();
    }
}
