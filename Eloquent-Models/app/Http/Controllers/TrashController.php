<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(){
        $trashed_posts = Post::onlyTrashed()->get();
        return view('posts.softdeletes',compact('trashed_posts'));
    }
    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();

    return redirect()->back();
    }
}
