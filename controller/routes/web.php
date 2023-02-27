<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/posts', [PostController::class,'show']);
Route::get('posts/create',[PostController::class,'createPost']);
Route::get('posts/edit{id}',[PostController::class,'editPost']);
Route::get('posts/update{id}',[PostController::class,'updatePost']);
Route::get('posts/delete{id}',[PostController::class,'deletePost']);
/***************************************************************************************************** */

/* routes belongs to the same controller */
Route::controller(PostController::class)->group(function(){
    Route::get('/posts','show');
    Route::get('posts/create','createPost');
    Route::get('posts/edit{id}','editPost');
    Route::get('posts/update{id}','updatePost');
    Route::get('posts/delete{id}','deletePost');
});

/**************************************************************************************************** */
/* Route Resource and the use of except and only */

Route::resource('users',UserController::class)->except(['show']);

    // Route::resource('users',UserController::class)->middleware('auth'); another way to apply rules on controller

    //Route::resource('users',UserController::class)->only(['create','show']); ['create','show']-> only works

/************************************************************************************** */


// Invoke controller and its route

Route::get('user_profile',UserProfileController::class);

/*************************************************************** */
