<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $releases = Release::all();
        return view('releases.index', compact('releases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $release = new Release();
        $release->name = $request->name;
        $release->description = $request->description;
        $release->date = $request->date;
        $release->save();
        return redirect()->route('releases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Release $release)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $release = Release::find($id);
        return view('releases.edit', compact('release'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $release = Release::find($id);
        $release->name = $request->name;
        $release->description = $request->description;
        $release->date = $request->date;
        $release->save();
        return redirect()->route('releases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $release = Release::find($id);
        $release->delete();
        return redirect()->route('releases.index');
    }
}
