<?php

namespace App\Http\Controllers;

use Firefly\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->with(['user', 'categories', 'tags'])
            ->paginate(9);

        return view('filament-blog::blogs.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $post->load(['user', 'categories', 'tags', 'comments.user']);

        return view('filament-blog::blogs.show', compact('post'));
    }
}
