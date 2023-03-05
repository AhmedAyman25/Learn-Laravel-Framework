<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{

    public function index(){
         
        
       // $posts = DB::table('posts')->find(3); // when return data by id  we use find(id)
            // return $posts;
       /*
            $title = DB::table('posts')->where('id',3)->value('title'); // extract a single value from a record using the value('ColumnName') 
                return $title;
        */
        
     /* -------  Retrieving A List Of Column Values ------------ */
        
    /* 
        $titles= DB::table('posts')->pluck('title'); 
                    foreach($titles as $title)
                        echo  $title.'<br>';
    */

    /*----  Aggregates count , max , min , sum , avg 
    
        $posts = DB::table('posts')->count();
        $MaxId = DB::table('posts')->max('id');
        $MinMId = DB::table('posts')->min('id');
        $Sum = DB::table('posts')->sum('id');
        $Avg = DB::table('posts')->avg('id');
        return 'thers are a '.$posts.' in the database'.' and Max id is '.$MaxId.' and Min id is '.$MinMId.' and Sum of Ids are '.$Sum.' and Average is '.$Avg; 
        
    */
    
    /* Determining If Records Exist
    
      if(DB::table('posts')->where('id',1)->exists())
        
         {return 'record is exist with id = 1';}
         
     if(DB::table('posts')->where('id',1)->doesntExist())
        {return 'record does not  exist ';}
        
    */


    /*      You may not always want to select all columns from a database table. Using the select method, you can specify a custom "select" clause for the query: 
        $posts = DB::table('posts')->select('title as Post_Name','body as Description')->get();
        return $posts;

    */

    /* The distinct method allows you to force the query to return distinct results:
     $uniquePosts =  DB::table('posts')->distinct()->select('title as Post_Name','body as Description')->get();
        return $uniquePosts;
        */

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