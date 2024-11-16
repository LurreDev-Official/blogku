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
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.posts.create', compact('categories', 'users'));
    }

    public function store(Request $request)
{
    try {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'user_id' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048', // Tambahkan validasi ukuran
        ]);

        // Hanya mengambil input yang diperlukan
        $data = $request->only('title', 'content', 'category_id', 'user_id');

        // Proses penyimpanan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        // Simpan data
        Post::create($data);

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');

    } catch (\Exception $e) {
        // Jika terjadi error, tampilkan pesan error
        return redirect()->back()
                         ->withInput() // Mengembalikan input sebelumnya
                         ->with('error', 'An error occurred: ' . $e->getMessage());
    }
}

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $users = User::all();
        return view('admin.posts.edit', compact('post', 'categories', 'users'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'category_id' => 'required',
        'user_id' => 'required',
    ]);

    $data = $request->only('title', 'content', 'category_id', 'user_id');
    $post = Post::findOrFail($id);

    // Cek apakah ada file gambar baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;
    }

    // Perbarui data post
    $post->update($data);

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