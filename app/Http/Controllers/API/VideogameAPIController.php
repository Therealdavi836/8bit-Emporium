<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use App\Models\Supplier;
use App\Models\Developer;
use Illuminate\Http\Request;

class VideogameAPIController extends Controller
{
    /**
     * Mostrar todos los videojuegos junto con sus proveedores y desarrolladores.
     */
    public function index()
    {
        $videogames = Videogame::with(['supplier', 'developer'])->get();
        $suppliers = Supplier::all();
        $developers = Developer::all();

        return response()->json([
            'videogames' => $videogames,
            'suppliers' => $suppliers,
            'developers' => $developers
        ], 200);
    }

    /**
     * Almacenar un nuevo videojuego.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'suppliers_id' => 'required|exists:suppliers,id',
            'developers_id' => 'required|exists:developers,id',
        ]);

        $videogame = Videogame::create($validatedData);

        return response()->json([
            'message' => 'Videojuego creado exitosamente',
            'videogame' => $videogame->load(['supplier', 'developer']) // Carga relaciones
        ], 201);
    }

    /**
     * Mostrar un videojuego por ID con su proveedor y desarrollador.
     */
    public function show($id)
    {
        $videogame = Videogame::with(['supplier', 'developer'])->find($id);

        if (!$videogame) {
            return response()->json(['message' => 'Videojuego no encontrado'], 404);
        }

        return response()->json($videogame, 200);
    }

    /**
     * Actualizar un videojuego.
     */
    public function update(Request $request, $id)
    {
        $videogame = Videogame::find($id);

        if (!$videogame) {
            return response()->json(['message' => 'Videojuego no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|numeric|min:0',
            'suppliers_id' => 'sometimes|exists:suppliers,id',
            'developers_id' => 'sometimes|exists:developers,id',
        ]);

        $videogame->update($validatedData);

        return response()->json([
            'message' => 'Videojuego actualizado exitosamente',
            'videogame' => $videogame->load(['supplier', 'developer'])
        ], 200);
    }

    /**
     * Eliminar un videojuego.
     */
    public function destroy($id)
    {
        $videogame = Videogame::find($id);

        if (!$videogame) {
            return response()->json(['message' => 'Videojuego no encontrado'], 404);
        }

        $videogame->delete();

        return response()->json(['message' => 'Videojuego eliminado exitosamente'], 200);
    }
}