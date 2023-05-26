<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* first method to add data by Model */
        // $post = NEW Post();
        // $post->title = $request->PostName;
        // $post->body = $request->PostBody;
        // $post->save();

        Post::create([
            'title' => $request->PostName,
            'body' => $request->PostBody

        ]);



        return response('data added !!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

    //     $post = Post::find($id);
    //    if($post){
    //     return view('posts.edit',compact('post'));
    //    }
    //    else{
    //     return response('post not found');
    //    }

        $post =Post::findorFail($id);
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

        return to_route('posts.index');

    }
}
