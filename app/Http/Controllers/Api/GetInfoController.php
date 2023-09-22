<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Apply;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetInfoController extends Controller
{
    public function get_posts(){
        $posts = PostResource::collection(Post::all());

        return $posts ;  
    }

    public function get_post($id){
        $post = Post::find($id);

        return $post ;
    }

    public function get_categories(){
        $categories = Category::all();

        return $categories ;  
    }

    public function get_category($id){
        $category = Category::find($id);

        return $category ;  
    }

    public function get_messages(){
        $messages = DB::table('applies')->get();

        return $messages ;
    }

    public function get_message($id){
        $message = Apply::find($id);

        return $message ;
    }
}
