<?php

namespace App\Http\Controllers;

use App\Models\VideogameTotal;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameTotalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogame_totals = VideogameTotal::with(['videogames'])->get();
        $videogame_totals = VideogameTotal::all();
        return view('videogame_totals.index', compact('videogame_totals', 'videogames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $videogame_total = new VideogameTotal();
        $videogame_total->videogame_id = $request->videogame_id;
        $videogame_total->total = $request->total;
        $videogame_total->save();
        return redirect()->route('videogame_totals.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($videogame_total, $id)
    {
        $videogame_total = VideogameTotal::find($id);
        $videogames = Videogame::all();
        return view('videogame_totals.edit', compact('videogame_totals', 'videogames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $videogame_Total, $id)
    {
        $videogame_total = VideogameTotal::find($id);
        $videogame_total->videogames_id = $request->videogames_id;
        $videogame_total->total = $request->total;
        $videogame_total->save();
        return redirect()->route('videogame_totals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($videogame_total, $id)
    {
        $videogame_total = VideogameTotal::find($id);
        $videogame_total->delete();
        return redirect()->route('videogame_totals.index');
    }
}
