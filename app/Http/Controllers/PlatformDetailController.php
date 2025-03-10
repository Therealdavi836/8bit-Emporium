<?php

namespace App\Http\Controllers;

use App\Models\PlatformDetail;
use App\Models\Videogame;
use App\Models\Platform;

use Illuminate\Http\Request;

class PlatformDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platform_details = PlatformDetail::all();
        $videogames = Videogame::all();
        $platforms = Platform::all();
        return view('platform_details.index', compact('platform_details', 'videogames', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $platform_detail = new PlatformDetail();
        $platform_detail->videogames_id = $request->videogames_id;
        $platform_detail->platforms_id = $request->platforms_id;
        $platform_detail->save();
        return redirect()->route('platform_details.index');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $platform_detail = PlatformDetail::find($id);
        $videogames = Videogame::all();
        $platforms = Platform::all();
        return view('platform_details.edit', compact('platform_detail', 'videogames', 'platforms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $platform_detail = PlatformDetail::find($id);
        $platform_detail->videogames_id = $request->videogames_id;
        $platform_detail->platforms_id = $request->platforms_id;
        $platform_detail->save();
        return redirect()->route('platform_details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $platform_detail = PlatformDetail::find($id);
        $platform_detail->delete();
        return redirect()->route('platform_details.index');
    }
}
