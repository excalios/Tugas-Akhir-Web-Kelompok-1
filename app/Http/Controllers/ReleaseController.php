<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function index(){
        return view('pages.releases');
    }

    public function list(Request $request, $title){
        return view('pages.release-list', [
            'title' => $title
        ]);
    }
}
