<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function landing()
    {
        $posts = Post::published()
            ->with(['user', 'categories'])
            ->take(6)
            ->get();

        $featuredPost = $posts->first();
        $recentPosts = $posts->skip(1);
        $categories = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(6)
            ->get();

        $stats = [
            'articles' => Post::published()->count(),
            'categories' => Category::count(),
            'doctors' => Dokter::count(),
            'patients' => Pasien::count(),
        ];

        return view('landing', compact('featuredPost', 'recentPosts', 'categories', 'stats'));
    }

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
        $shareButton = \Firefly\FilamentBlog\Models\ShareSnippet::query()->active()->first();

        return view('filament-blog::blogs.show', compact('post', 'shareButton'));
    }
}
