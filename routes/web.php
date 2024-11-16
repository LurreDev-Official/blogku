<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('kategori', CategoryController::class);
    Route::resource('posts', PostController::class);
});

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/detailpost/{id}', [FrontendController::class, 'show'])->name('detailpost');

Auth::routes();

