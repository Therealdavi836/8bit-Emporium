@extends('layouts.app')

@section('content')
<section id="register" class="container-grid padding-large position-relative overflow-hidden">
<div class="container">
    <h2>Mi Lista de Deseos</h2>

    <ul id="wishlist-items" class="list-group">
        <!-- Los videojuegos se cargarán aquí dinámicamente -->
    </ul>

    <p id="empty-message">No tienes videojuegos en tu lista de deseos.</p>
</div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
        const wishlistContainer = document.getElementById("wishlist-items");
        const emptyMessage = document.getElementById("empty-message");

        wishlistContainer.innerHTML = ""; // Limpiar para evitar duplicados

        if (wishlist.length > 0) {
            emptyMessage.style.display = "none";
            wishlist.forEach(game => {
                if (!game.name || !game.price || !game.developer) return; // Evitar errores con datos inválidos

                let listItem = document.createElement("li");
                listItem.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");
                listItem.innerHTML = `
                    <div>
                        <strong>${game.name}</strong> <br>
                        <small>Desarrollador: ${game.developer} | Precio: $${game.price}</small>
                    </div>
                    <button class="btn btn-danger btn-sm remove-from-wishlist" data-game-name="${game.name}">Eliminar</button>
                `;
                wishlistContainer.appendChild(listItem);
            });

            document.querySelectorAll(".remove-from-wishlist").forEach(button => {
                button.addEventListener("click", function () {
                    let gameName = this.getAttribute("data-game-name");
                    wishlist = wishlist.filter(game => game.name !== gameName);
                    localStorage.setItem("wishlist", JSON.stringify(wishlist));
                    this.parentElement.remove();
                    if (wishlist.length === 0) {
                        emptyMessage.style.display = "block";
                    }
                });
            });

        } else {
            emptyMessage.style.display = "block";
        }
    });
</script>
@endsection


