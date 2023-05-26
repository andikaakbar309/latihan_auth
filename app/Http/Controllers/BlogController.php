<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function welcome(Request $request){
        $post = Post::all();
        $category = Category::all();
        if($request->category != null){
            $post = Post::all()
            ->where('category_id', $request->category);
        }
        return view('welcome', compact('post', 'category'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('blog', compact('post'));
    }
}
