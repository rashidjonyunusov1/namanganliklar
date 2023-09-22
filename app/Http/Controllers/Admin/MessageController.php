<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(){
        
        $messages = DB::table('applies')->latest()->paginate(10);
        
        return view('admin.messages.index', compact('messages'));
    }

    public function show($id){
        
        $message = DB::table('applies')->where('id', $id)->first();
        // return $message->full_name;
        DB::table('applies')->where('id', $id)->update(['status' => 1]);
        return view('admin.messages.show', compact('message'));
    }

    public function destroy($id){
        DB::table('applies')->where('id', $id)->delete();
        return back()->with('success', 'Xabar muvaffaqiyatli o`chirildi!');
    }
}
