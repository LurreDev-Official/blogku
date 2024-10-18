<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('posts.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $users = User::all();
        return view('posts.edit', compact('post', 'categories', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}