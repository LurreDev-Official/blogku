<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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


Route::get('/dashboard', function () {
    return view('admin.dasboard');
});


// Routes for Users
Route::resource('users', UserController::class);

// Routes for Categories
Route::resource('categories', CategoryController::class);

// Routes for Posts
Route::resource('posts', PostController::class);


//front user 
Route::get('/', function () {
    return view('beranda');
});
Route::get('/detailpost', function () {
    return view('detailpost');
});
