<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    function news(Request $request){
        $category = 'News';
        return view('pages.category-list', [
            'category' => $category
        ]);
    }

    function features(Request $request){
        $category = 'Features';
        return view('pages.category-list', [
            'category' => $category
        ]);
    }

    function guides(Request $request){
        $category = 'Guides';
        return view('pages.category-list', [
            'category' => $category
        ]);
    }

    function reviews(Request $request){
        $category = 'Reviews';
        return view('pages.category-list', [
            'category' => $category
        ]);
    }
}
