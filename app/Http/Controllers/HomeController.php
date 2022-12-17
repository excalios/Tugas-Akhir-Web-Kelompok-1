<?php

namespace App\Http\Controllers;

use App\Enums\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke()
    {
        $posts = Post::limit(3)->get();
        $releases = Post::where('category', Category::Release->value)->limit(5)->get();
        $news = Post::where('category', Category::News->value)->limit(5)->get();
        $features = Post::where('category', Category::Feature->value)->limit(6)->get();
        $guides = Post::where('category', Category::Guide->value)->limit(6)->get();
        $reviews = Post::where('category', Category::Review->value)->limit(6)->get();
        return view('pages.home', [
            'posts' => $posts,
            'releases' => $releases,
            'news' => $news,
            'features' => $features,
            'guides' => $guides,
            'reviews' => $reviews,
        ]);
    }
}
