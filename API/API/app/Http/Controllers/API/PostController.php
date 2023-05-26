<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    use ApiResponseTrait;
      public function index()
    {
        $posts = PostResource::collection(Post::all()); // get collection of data

       return $this->apiResponse($posts,200,'ok');
    }


    public function show($id){

   // $post = new PostResource(Post::find($id)); // get single data
    $post = Post::find($id);
    if ($post) {
        return $this->apiResponse(new PostResource($post), 200, 'ok');
    }
    return $this->apiResponse(null,404,'post not found');

    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|max:255',
                'body' => 'required',
            ]
        );

        if ($validator->fails()){
            return $this->apiResponse(null,400,$validator->errors());
        }

       $insert =  Post::create($request->all());
        if ($insert) {
            return $this->apiResponse(new PostResource($insert), 201, 'post inserted successfully');
        }
        return $this->apiResponse(null,400,'post not inserted');
    }
}
