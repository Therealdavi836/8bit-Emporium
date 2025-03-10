<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::all();
        return response()->json($developers, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $developer = Developer::create([
            'name' => $request->name,
            'country' => $request->country,
        ]);

        return response()->json([
            'message' => 'Developer created successfully',
            'developer' => $developer
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $developer = Developer::find($id);

        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }

        return response()->json($developer, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $developer = Developer::find($id);

        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'country' => 'sometimes|required|string|max:255',
        ]);

        $developer->update($request->only(['name', 'country']));

        return response()->json([
            'message' => 'Developer updated successfully',
            'developer' => $developer
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $developer = Developer::find($id);

        if (!$developer) {
            return response()->json(['message' => 'Developer not found'], 404);
        }

        $developer->delete();

        return response()->json(['message' => 'Developer deleted successfully'], 200);
    }
}
