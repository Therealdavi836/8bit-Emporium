<?php

namespace App\Http\Controllers;

use App\Models\PromotionDetail;
use App\Models\Promotion;
use App\Models\Videogame;

use Illuminate\Http\Request;

class PromotionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotion_details = PromotionDetail::all();
        $promotions = Promotion::all();
        $videogames = Videogame::all();
        return view('promotion_details.index', compact('promotion_details', 'videogames', 'promotions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $promotion_details = new PromotionDetail(); 
        $promotion_details->videogame_id = $request->videogame_id;
        $promotion_details->promotion_id = $request->promotion_id;
        $promotion_details->save();
        return redirect()->route('promotion_details.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $promotion_detail = PromotionDetail::find($id);
        $videogames = Videogame::all();
        $promotions = Promotion::all();
        return view('promotion_details.edit', compact('promotion_detail', 'videogames', 'promotions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $promotion_details = PromotionDetail::find($id);
        $promotion_details->videogame_id = $request->videogame_id;
        $promotion_details->promotion_id = $request->promotion_id;
        $promotion_details->save();
        return redirect()->route('promotion_details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $promotion_details = PromotionDetail::find($id);
        $promotion_details->delete();
        return redirect()->route('promotion_details.index');

    }
}
