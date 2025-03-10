<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Videogame;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = session()->get('wishlist', []);
        return view('wishlists.index', compact('wishlist'));
    }

    public function add($videogameId)
    {
        $wishlist = session()->get('wishlist', []);

        if (!in_array($videogameId, $wishlist)) {
            $wishlist[] = $videogameId;
            session()->put('wishlist', $wishlist);
        }

        return redirect()->route('wishlists.index')->with('success', 'Videojuego añadido a la lista de deseos.');
    }

    public function remove($videogameId)
    {
        $wishlist = session()->get('wishlist', []);
        $wishlist = array_diff($wishlist, [$videogameId]);

        session()->put('wishlist', $wishlist);

        return redirect()->route('wishlists.index')->with('success', 'Videojuego eliminado de la lista de deseos.');
    }

    public function clear()
    {
        session()->forget('wishlist');

        return redirect()->route('wishlists.index')->with('success', 'Lista de deseos vaciada.');
    }
}

