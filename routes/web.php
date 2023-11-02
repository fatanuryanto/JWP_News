<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/',[PostController::class,'index']);
Route::get('/post/search',[PostController::class,'search']);
Route::get('/post/{id}',[PostController::class,'show']);
Route::get('/storePost',[PostController::class,'store']);
Route::get('/post/edit/{id}',[PostController::class,'edit']);
Route::get('/post/update/{id}',[PostController::class,'update']);
Route::get('/post/comment/{id}',[CommentController::class,'store']);
Route::get('/comment/delete/{id}',[CommentController::class,'destroy']);


Auth::routes();
