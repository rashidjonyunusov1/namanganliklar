<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Audits;


class AuditController extends Controller
{
    public function index(){
        
        $audits = Audits::paginate(10);
        // $audits = DB::table('audits')->latest()->paginate(10);
        return view('admin.audits.index', compact('audits'));
    }

    public function show($id){
        
        $audit = DB::table('audits')->where('id', $id)->first();
        DB::table('audits')->where('id', $id)->update(['status' => 1]);
        return view('admin.audits.show', compact('audit'));
    }

    public function destroy($id){
        DB::table('audits')->where('id', $id)->delete();
        return back()->with('success', 'Xabar muvaffaqiyatli o`chirildi!');
    }
}
