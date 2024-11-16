<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //
    public function index() {
        $posts = Post::with('category')->latest()->take(6)->get(); $categories = Category::all();
        return view('beranda', compact('posts', 'categories'));
     }
        public function show($id) {
        $post = Post::with('category')->findOrFail($id);
        return view('detailpost', compact('post')); 
    }
}
