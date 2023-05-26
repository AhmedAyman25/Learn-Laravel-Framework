<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->PostName,
            'body' => $request->PostBody

        ]);



        return response('data added !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $post = Post::findorFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         Post::find($id)->update([
             'title' => $request->PostName,
            'body' => $request->PostBody
        ]);
        return response('data updated !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('dashboard');
    }
}
