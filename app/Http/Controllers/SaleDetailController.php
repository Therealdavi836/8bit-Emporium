<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use App\Models\User;
use App\Models\Videogame;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale_details = SaleDetail::all();
        $users = User::all();
        $videogames = Videogame::all();
        return view('sale_details.index', compact('sale_details', 'users', 'videogames'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale_detail = new SaleDetail();
        $sale_detail->users_id = $request->users_id;
        $sale_detail->videogames_id = $request->videogames_id;
        $sale_detail->quantity = $request->quantity;
        $sale_detail->sale_date = $request->sale_date;
        $sale_detail->save();
        return redirect()->route('sale_details.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sale_detail = SaleDetail::find($id);
        $users = User::all();
        $videogames = Videogame::all();

        return view('sale_details.edit', compact('sale_detail', 'users', 'videogames'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sale_detail = SaleDetail::find($id);
        $sale_detail->users_id = $request->users_id;
        $sale_detail->videogames_id = $request->videogames_id;
        $sale_detail->quantity = $request->quantity;
        $sale_detail->sale_date = $request->sale_date;
        $sale_detail->save();

        return redirect()->route('sale_details.index');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sale_detail = SaleDetail::find($id);
        $sale_detail->delete();
        return redirect()->route('sale_details.index');
   }

    public function graphicSaleDetail()
    {
        $saleDetails = SaleDetail::all();
        return response()->json($saleDetails);
    }
}