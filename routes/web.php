<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dasboard', function () {
    return view('admin.dasboard');
});
// CREATE routes - Static pages
Route::get('/kategori/create', function () {
    return view('admin.kategori.create');
});

Route::get('/user/create', function () {
    return view('admin.user.create');
});

Route::get('/post/create', function () {
    return view('admin.post.create');
});

// READ routes - Static pages (Index)
Route::get('/kategori', function () {
    return view('admin.kategori.index');
});

Route::get('/user', function () {
    return view('admin.user.index');
});

Route::get('/post', function () {
    return view('admin.post.index');
});

// EDIT routes - Static pages
Route::get('/kategori/edit/{id}', function ($id) {
    return view('admin.kategori.edit', ['id' => $id]);
});

Route::get('/user/edit/{id}', function ($id) {
    return view('admin.user.edit', ['id' => $id]);
});

Route::get('/post/edit/{id}', function ($id) {
    return view('admin.post.edit', ['id' => $id]);
});

// SHOW routes - Static pages
Route::get('/kategori/{id}', function ($id) {
    return view('admin.kategori.show', ['id' => $id]);
});

Route::get('/user/{id}', function ($id) {
    return view('admin.user.show', ['id' => $id]);
});

Route::get('/post/{id}', function ($id) {
    return view('admin.post.show', ['id' => $id]);
});



//front user 
Route::get('/', function () {
    return view('beranda');
});
Route::get('/detailpost', function () {
    return view('detailpost');
});
