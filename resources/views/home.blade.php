@extends('layouts.app')

@section('content')
<section id="register" class="container-grid padding-large position-relative overflow-hidden">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>{{ __('Bienvenido a 8-bit Emporium') }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Verificación de rol --}}
                        @if(Auth::user()->role_id == '1001')
                            <h4 class="text-center">{{ __('Panel de Administración') }}</h4>
                            <p class="text-center">{{ __('Gestion de la información') }}</p>

                            <div class="d-flex justify-content-center mt-4">
                                <a href="/admin/dashboard" class="btn btn-outline-primary m-2">Gestionar Tienda</a>
                                <a href="{{ url('/') }}" class="btn btn-outline-secondary m-2">Volver a la pagina principal</a>
                            </div>

                            @elseif(Auth::user()->role_id == '2002')
                            <h4 class="text-center">{{ __('¡Explora nuestros videojuegos!') }}</h4>
                            <p class="text-center">{{ __('Revisa las últimas ofertas y encuentra tus títulos favoritos.') }}</p>

                            <div class="d-flex justify-content-center mt-4">
                                <!-- Botón para ir al perfil -->
                                <a href="{{ route('profiles.index') }}" class="btn btn-primary m-2">
                                    <i class="bi bi-person-circle"></i> Perfil
                                </a>

                                <!-- Botón para ir al carrito de compras -->
                                <a href="{{ route('carts.index') }}" class="btn btn-warning m-2">
                                    <i class="bi bi-cart"></i> Carrito
                                </a>

                                <!-- Botón para ir a la lista de deseos -->
                                <a href="{{ route('wishlists.index') }}" class="btn btn-success m-2">
                                    <i class="bi bi-heart"></i> Lista de Deseos
                                </a>
                                
                                <a href="{{ url('/') }}" class="btn btn-outline-secondary m-2">Volver a la pagina principal</a>
                                <!-- Botón para cerrar sesión -->
                                <a href="{{ route('logout') }}" class="btn btn-danger m-2"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else

                            <h4 class="text-center">{{ __('¡Bienvenido!') }}</h4>
                            <p class="text-center">{{ __('Tu rol no está definido. Contacta al administrador si esto es un error.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

