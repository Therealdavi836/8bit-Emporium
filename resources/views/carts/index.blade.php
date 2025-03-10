@extends('layouts.app')

@section('content')
<section id="register" class="container-grid padding-large position-relative overflow-hidden">
<div class="container" style="min-height: 75vh;">
    <h1 class="mb-4">🛒 Tu Carrito de Compras</h1>

    <div id="cart-container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>🎮 Videojuego</th>
                    <th>💰 Precio</th>
                    <th>📦 Desarrollador</th>
                    <th>🛠 Acciones</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Se llenará con JavaScript -->
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between">
        <h4>Total: <span id="cart-total">COP 0</span></h4>
        <button id="clear-cart" class="btn btn-danger">🗑 Vaciar carrito</button>
    </div>
</div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const cartItems = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    function updateCart() {
        cartItems.innerHTML = "";
        let total = 0;

        cart.forEach((game, index) => {
            total += parseFloat(game.price.replace("COP ", "").replace(",", ""));
            const row = `
                <tr>
                    <td><img src="${game.image}" width="50"> ${game.title}</td>
                    <td>${game.price}</td>
                    <td>${game.developer}</td>
                    <td>
                        <button class="btn btn-danger btn-sm remove-item" data-index="${index}">❌ Eliminar</button>
                    </td>
                </tr>
            `;
            cartItems.innerHTML += row;
        });

        cartTotal.textContent = "COP " + total.toLocaleString("es-CO");

        // Eliminar elementos del carrito
        document.querySelectorAll(".remove-item").forEach(button => {
            button.addEventListener("click", function() {
                const index = this.getAttribute("data-index");
                cart.splice(index, 1);
                localStorage.setItem("cart", JSON.stringify(cart));
                updateCart();
            });
        });
    }

    updateCart();

    // Vaciar carrito
    document.getElementById("clear-cart").addEventListener("click", function() {
        localStorage.removeItem("cart");
        cart = [];
        updateCart();
    });
});
</script>

@endsection
