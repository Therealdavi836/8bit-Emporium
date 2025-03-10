<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::all();
        return view('platforms.index', compact('platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $platform = new Platform();
        $platform->name = $request->input('name');
        $platform->save();
        return redirect()->route('platforms.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $platform = Platform::find($id);
        return view('platforms.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $platform = Platform::find($id);
        $platform->name = $request->input('name');
        $platform->save();
        return redirect()->route('platforms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $platform = Platform::find($id);
        $platform->delete();
        return redirect()->route('platforms.index');
    }

}
