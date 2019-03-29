<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\Post;
use Illuminate\Support\Facades\Auth;




class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->post_id);

        Comments::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);
        return redirect()->route('posts.show', $post->id);
    }
}
