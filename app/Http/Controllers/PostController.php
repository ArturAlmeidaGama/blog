<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(int $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }
}
