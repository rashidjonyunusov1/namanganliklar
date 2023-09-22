<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostResource::collection(Post::all());

        return $posts;
    }

    public function store(Request $request){
        $post = Post::create($request->all());

        return $post;
    }

    public function show(Post $post)
    {
        $post = Post::all();

        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return 'OK';
    }
   
}
