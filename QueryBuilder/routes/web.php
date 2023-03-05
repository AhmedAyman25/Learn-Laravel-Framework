<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(PostsController::class)->group(function(){


Route::get('posts','index')->name('posts');
Route::get('post/create', 'create')->name('post.create');
Route::post('post/insert','insert')->name('post.insert');
Route::get('post/edit/{id}','edit')->name('post.edit');  
Route::PUT('post/update/{id}','update')->name('post.update'); // PUT -> for update
Route::get('post/delete/{id}','delete')->name('post.delete');
Route::get('posts/delete/all','deleteAll')->name('posts.delete.all');
Route::get('posts/delete/all/truncate','deleteAllTruncate')->name('posts.delete.all.truncate');
    
});