<?php

namespace App\Http\Controllers;

use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Mostrar el carrito
    public function index()
    {
        $cart = Session::get('cart', []); // Obtener el carrito desde la sesión
        return view('carts.index', compact('cart'));
    }

    // Agregar un videojuego al carrito
    public function add(Request $request, $videogameId)
    {
        $videogame = Videogame::findOrFail($videogameId);

        $cart = Session::get('cart', []);

        if (isset($cart[$videogameId])) {
            $cart[$videogameId]['quantity'] += 1;
        } else {
            $cart[$videogameId] = [
                'id' => $videogame->id,
                'title' => $videogame->title,
                'price' => $videogame->price,
                'developer' => $videogame->developer->name,
                'image' => $videogame->image,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Videojuego añadido al carrito.');
    }

    // Actualizar la cantidad de un videojuego en el carrito
    public function update(Request $request, $videogameId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Session::get('cart', []);

        if (isset($cart[$videogameId])) {
            $cart[$videogameId]['quantity'] = $request->quantity;
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cantidad actualizada.');
    }

    // Eliminar un videojuego del carrito
    public function remove($videogameId)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$videogameId])) {
            unset($cart[$videogameId]);
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Videojuego eliminado.');
    }

    // Vaciar el carrito
    public function clear()
    {
        Session::forget('cart');
        return redirect()->route('cart.index')->with('success', 'Carrito vaciado.');
    }
}