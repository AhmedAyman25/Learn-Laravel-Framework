<?php


use Illuminate\Http\Request as HttpRequest;
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
/* get route used to move between pages without sending any data(requests) */
Route::get('/', function () {
    return view('welcome');
});


/* post route must take a request that contains data from any form  */
Route::post('users',function(HttpRequest $request ){
    //return view('users');
    //return 'users';
    return $request;
});

/* parameter route  */
Route::get('users/{name}',function(string $name){
    if($name == 'ahmed')
         return "admin: ".$name;
    else
        return 'user: '.$name;
});

Route::get('username',function(){
    $username = "ahmed ayman";
    return view("users",compact("username"));
});

Route::get('users',function(){
    return view('users');
})->name('users');
Route::get('posts',function(){
    return view('posts');
})->name('posts');

