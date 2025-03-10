<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use App\Models\Supplier;
use App\Models\Developer;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        $suppliers = Supplier::all();
        $developers = Developer::all();
        return view('videogames.index', compact('videogames', 'suppliers', 'developers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $videogames =new Videogame();
        $videogames->title = $request->title;
        $videogames->description = $request->description;
        $videogames->price = $request->price;
        $videogames->suppliers_id = $request->suppliers_id;
        $videogames->developers_id = $request->developers_id;
        $videogames->save();
        return redirect()->route('videogames.index');
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $videogame = Videogame::find($id);
        $supplier = Supplier::all();
        $developer = Developer::all();
        return view('videogames.edit', compact('videogame', 'supplier', 'developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $videogame = Videogame::find($id);
        $videogame->title = $request->title;
        $videogame->description = $request->description;
        $videogame->price = $request->price;
        $videogame->suppliers_id = $request->suppliers_id;
        $videogame->developers_id = $request->developers_id;
        $videogame->save();
        return redirect()->route('videogames.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogames, $id)
    {
        $videogame = Videogame::find($id);
        $videogame->delete();
        return redirect()->route('videogames.index');
    }
}
