<?php

namespace App\Http\Controllers;

use App\Enums\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    function news(){
        $category = Category::News->value;
        $posts = Post::where('category', $category)->paginate(9);
        return view('pages.category-list', [
            'category' => $category,
            'posts' => $posts
        ]);
    }

    function features(){
        $category = Category::Feature->value;
        $posts = Post::where('category', $category)->paginate(9);
        return view('pages.category-list', [
            'category' => $category,
            'posts' => $posts
        ]);
    }

    function guides(){
        $category = Category::Guide->value;
        $posts = Post::where('category', $category)->paginate(9);
        return view('pages.category-list', [
            'category' => $category,
            'posts' => $posts
        ]);
    }

    function reviews(){
        $category = Category::Review->value;
        $posts = Post::where('category', $category)->paginate(9);
        return view('pages.category-list', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
