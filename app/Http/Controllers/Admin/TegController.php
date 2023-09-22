<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class TegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tegs = Teg::paginate(10);
       return view('admin.tegs.index', compact('tegs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tegs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Teg::create($request->all());
        return redirect()->route('admin.tegs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teg  $teg
     * @return \Illuminate\Http\Response
     */
    public function show(Teg $teg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teg  $teg
     * @return \Illuminate\Http\Response
     */
    public function edit(Teg $teg)
    {

        return view('admin.tegs.update', compact('teg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teg  $teg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teg $teg)
    {
        $teg->update($request->all());

        return redirect()->route('admin.tegs.index', compact('teg'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teg  $teg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teg $teg)
    {
        $teg->delete();

        return redirect()->route('admin.tegs.index', compact('teg'));
    }
}
