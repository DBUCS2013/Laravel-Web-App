<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;
use App\http\Controllers\BladeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts',[PostController::class,'allPosts']);
Route::get('/add-post',[PostController::class,'addPostView']);
Route::post('create-post',[PostController::class,'createPost'])->name('post.create');
Route::get('/posts',[PostController::class,'getPosts']);
Route::get('/posts{id}',[PostController::class,'getPostById']);
Route::get('/edit-post{id}',[PostController::class,'editPost']);
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');
Route::get('/delete-post{id}',[PostController::class,'deletePost']);
Route::get('/blade',[BladeController::class,'aboutBlade']);
