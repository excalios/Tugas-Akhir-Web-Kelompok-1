<?php

namespace App\Http\Controllers;

use App\Enums\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function index(){
        $posts = Post::where('category', Category::Release->value)->limit(6)->get();
        return view('pages.releases', [
            'posts' => $posts
        ]);
    }

    public function list($title){
        $posts = Post::where('category', Category::Release->value)->paginate(20);
        return view('pages.release-list', [
            'title' => $title,
            'posts' => $posts
        ]);
    }
}
