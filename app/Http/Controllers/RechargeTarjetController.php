<?php

namespace App\Http\Controllers;

use App\Models\RechargeTarjet;
use Illuminate\Http\Request;

class RechargeTarjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recharge_tarjets = RechargeTarjet::all();
        return view('recharge_tarjets.index', compact('recharge_tarjets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recharge_tarjet = new RechargeTarjet();
        $recharge_tarjet->code = $request->code;
        $recharge_tarjet->name = $request->name;
        $recharge_tarjet->type = $request->type;
        $recharge_tarjet->currency = $request->currency;
        $recharge_tarjet->amount = $request->amount;
        $recharge_tarjet->creation_date = $request->creation_date;
        $recharge_tarjet->expiration_date = $request->expiration_date;
        $recharge_tarjet->save();
        return redirect()->route('recharge_tarjets.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($code)
    {
        $recharge_tarjet = RechargeTarjet::find($code);
        return view('recharge_tarjets.edit', compact('recharge_tarjet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $code)
    {
        $recharge_tarjet = RechargeTarjet::find($code);
        $recharge_tarjet->code = $request->code;
        $recharge_tarjet->name = $request->name;
        $recharge_tarjet->type = $request->type;
        $recharge_tarjet->currency = $request->currency;
        $recharge_tarjet->amount = $request->amount;
        $recharge_tarjet->creation_date = $request->creation_date;
        $recharge_tarjet->expiration_date = $request->expiration_date;
        $recharge_tarjet->save();
        return redirect()->route('recharge_tarjets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($code)
    {
        $recharge_tarjet = RechargeTarjet::find($code);
        $recharge_tarjet->delete();
        return redirect()->route('recharge_tarjets.index');
    }
    public function graphicRechargeTarjet()
    {
        $recharge_tarjets = RechargeTarjet::all();
        return response()->json($recharge_tarjets);
    }
}

