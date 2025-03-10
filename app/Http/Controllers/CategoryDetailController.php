<?php

namespace App\Http\Controllers;

use App\Models\CategoryDetail;
use App\Models\Videogame;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category_details = CategoryDetail::all();
        $videogames = VideoGame::all();
        $categories = Category::all();
        return view('category_details.index', compact('category_details', 'videogames', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category_detail = new CategoryDetail();
        $category_detail->videogames_id = $request->videogames_id;
        $category_detail->categories_id = $request->categories_id;
        $category_detail->save();
        return redirect()->route('category_details.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category_detail = categoryDetail::find($id);
        $videogames = Videogame::all();
        $categories = Category::all();
        return view('category_details.edit', compact('category_detail', 'videogames', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category_detail = categoryDetail::find($id);
        $category_detail->videogames_id = $request->videogames_id;
        $category_detail->categories_id = $request->categories_id;
        $category_detail->save();
        return redirect()->route('category_details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category_detail = categoryDetail::find($id);
        $category_detail->delete();
        return redirect()->route('category_details.index');
    }
}
