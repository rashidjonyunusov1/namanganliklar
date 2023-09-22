<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function get_article(){
        return view('pages.article');
    }

    public function get_contact(){
        return view('pages.contact');
    }

    public function get_list($id){
        $posts = Post::where('category_id', $id)->paginate(10);
        return view('pages.list', compact('posts'));
    }

    public function post_message(Request $request){
        DB::table('applies')->insert([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return back();
    }
}
