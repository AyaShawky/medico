<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.featuer')->with('feature',Features::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addFeatuer');
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
      $feature=new Features();
      $feature->title=$request->title;
      $feature->description=$request->description;
      $feature->image=$path;
      $feature->save();
      return redirect('/feature');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function show(Features $features)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function edit(Features $feature)
    {
        return view('admin.editFeatuer')->with('feature',$feature);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Features $feature)
    {
        $feature->title=$request->title;
        $feature->description=$request->description;
        $feature->image=$request->image;
        $feature->save();
        return redirect('/feature');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Features  $features
     * @return \Illuminate\Http\Response
     */
    public function destroy(Features $feature)
    {
        $feature->delete();
        return redirect('/feature');
    }
}
