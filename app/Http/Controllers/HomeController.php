<?php

namespace App\Http\Controllers;

use App\Models\EngineerType;
use App\Models\MainImage;
use \App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'posts' => Post::orderBy('created_at', 'DESC')->skip(1)->paginate(5),
            'other_posts' => Post::inRandomOrder()->limit(6)->get(),
            'categories' => EngineerType::all(),
            'mainImage' => MainImage::first(),
        ]);
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        return view('home.services');
    }

    public function categorize($category)
    {
        if($category != null) {
            return view('home.categorize', [
                'posts' => Post::where('post_type', $category)->orderBy('created_at' ,'DESC')->skip(1)->paginate(5),
            ]);
        }
    }

    public function aboutDeveloper()
    {
        $yearsOfExperience = date('Y') - 2018;
        return view('home.aboutDeveloper', compact('yearsOfExperience'));
    }

    public function searchPosts(Request $request)
    {
        $posts = Post::where('title', 'like', '%'.$request->searchText.'%')->paginate(5);
        return view('home.searchPosts', compact('posts'));
    }
}
