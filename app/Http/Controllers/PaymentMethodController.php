<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Role;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment_methods = PaymentMethod::with(['roles'])->get();

        $payment_methods = PaymentMethod::all();
        $roles = Role::all();
        return view('payment_Methods.index', compact('payment_Methods', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment_method = new PaymentMethod();
        $payment_method->role_id = $request->role_id;
        $payment_method->payment_method = $request->payment_method;
        $payment_method->save();
        return redirect()->route('payment_methods.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($payment_method, $id)
    {
        $payment_method = PaymentMethod::find($id);
        $role = Role::all();
        return view('payment_methods.edit', compact('payment_methods', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$payment_method, $id)
    {
        $payment_method = PaymentMethod::find($id);
        $payment_method->roles_id = $request->roles_id;
        $payment_method->payment_method = $request->payment_method;
        $payment_method->save();
        return redirect()->route('payment_methods.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($payment_method, $id)
    {
        $payment_method = PaymentMethod::find($id);
        $payment_method->delete();
        return redirect()->route('payment_methods.index');
    }
}
