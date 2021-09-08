<?php

namespace App\Http\Controllers;

use App\Models\Testmonils;
use Illuminate\Http\Request;

class TestmonilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testmonils')->with('testmonils',Testmonils::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addTestmonils');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path=$request->image->store('images');
        $testmonils = new Testmonils();
        $testmonils->name=$request->name;
        $testmonils->job=$request->job;
        $testmonils->description=$request->description;
        $testmonils->image=$path;
        $testmonils->save();
        return redirect('/testmonils');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testmonils  $testmonils
     * @return \Illuminate\Http\Response
     */
    public function show(Testmonils $testmonils)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testmonils  $testmonils
     * @return \Illuminate\Http\Response
     */
    public function edit(Testmonils $testmonils)
    {
        return view('admin.editTestmonils')->with('testmonils',$testmonils);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testmonils  $testmonils
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testmonils $testmonils)
    {
        $testmonils->name=$request->name;
        $testmonils->job=$request->job;
        $testmonils->description=$request->description;
        $testmonils->image=$request->image;
        $testmonils->save();
        return redirect('/testmonils');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testmonils  $testmonils
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testmonils $testmonils)
    {
        $testmonils->delete();
        return redirect('/testmonils');
    }
}
