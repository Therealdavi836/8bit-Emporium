<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::all();
        return view('developers.index', compact('developers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $developer = new Developer();
        $developer->name = $request->name;
        $developer->country = $request->country;
        $developer->save();
        return redirect()->route('developers.index');
    }
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $developer = Developer::find($id);
        return view('developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $developer = Developer::find($id);
        $developer->name = $request->name;
        $developer->country = $request->country;
        $developer->save();
        return redirect()->route('developers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $developer = Developer::find($id);
        $developer->delete();
        return redirect()->route('developers.index');
    }
}
