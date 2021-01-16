<?php

namespace App\Http\Controllers;
use \App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'posts' => Post::all()
        ]);
    }
}
