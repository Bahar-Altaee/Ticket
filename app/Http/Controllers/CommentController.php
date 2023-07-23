<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
        public function store(Request $request, $postId)
    {
        $validatedData = $request->validate([
            'comment_body' => 'required',
        ]);

        $validatedData['auth_user_id'] = auth()->user()->id;

        $post = Post::findOrFail($postId);

        $post->comments()->create($validatedData);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

}
