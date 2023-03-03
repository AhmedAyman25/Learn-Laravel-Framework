<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{

    public function index(){
        
        $posts = DB::table('posts')->get();

        return view('posts.index',compact('posts'));
    }

    
    
    
    
    public function create()
    {
        return view('posts.create');
    }
    
    
    // insert data to database using QueryBuilder interface
    public function insert(Request $request)
    {
        
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return response('data inserted successully');
        
    }
    
    public function edit($id){
    
        $post = DB::table('posts')->where('id',$id)->first();
    
        return view('posts.edit',compact("post"));
    }

    public function update(Request $request,$id){

        DB::table('posts')->where('id',$id)->update([
            
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('posts');
 
    }

    public function delete($id){

        DB::table('posts')->where('id',$id)->delete();
       return redirect()->route('posts');
       
       
    }
    
    public function deleteAll(){
        DB::table('posts')->delete();
        return redirect()->route('posts');
        
    }

    public function deleteAllTruncate(){
        DB::table('posts')->truncate();
         return redirect()->route('posts');

    }
}