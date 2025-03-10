<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Developer;
use App\Models\Category;
use App\Models\Platform;

class ExploreController extends Controller
{
    public function index(Request $request)
    {
        // Obtener datos desde las tablas
        $suppliers = Supplier::all();
        $developers = Developer::all();
        $categories = Category::all();  // 👈 Esta línea es importante
        $platforms = Platform::all();

        // Depuración: Verificar que se están obteniendo datos
        // dd($categories, $suppliers, $developers, $platforms);

        return view('explore.index')->with([
            'suppliers' => $suppliers,
            'developers' => $developers,
            'categories' => $categories,
            'platforms' => $platforms,
        ]);
        
    }
}


