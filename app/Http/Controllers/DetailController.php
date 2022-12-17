<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __invoke($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'post' => $post
        ]);
    }
}
