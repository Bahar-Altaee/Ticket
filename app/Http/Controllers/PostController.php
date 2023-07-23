<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
        public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ticket_title' => 'required',
            'ticket_body' => 'required',
            // Add validation rules for other fields
        ]);

        $validatedData['auth_user_id'] = auth()->user()->id;

        $post = Post::create($validatedData);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function show($postId)
    {
        $post = Post::with('comments.user')->findOrFail($postId);

        return view('posts.show', compact('post'));
    }

}
