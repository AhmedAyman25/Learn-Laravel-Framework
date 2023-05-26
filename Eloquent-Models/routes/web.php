<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TrashController;
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
Route::resource('posts',PostController::class);

//Route::get('trash',function (){
//    $trashed_Posts = \App\Models\Post::onlyTrashed()->get();
//    return view('posts.softdeletes',compact('trashed_Posts'));
//});
Route::get('trashed',[TrashController::class,'index']);
Route::get('trashed/restore/{id}',[TrashController::class,'restore'])->name('post.restore');
