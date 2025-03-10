@extends('layouts.app')

@section('content')
<section id="register" class="container-grid padding-large position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <!-- Tarjeta con imagen -->
            <div class="col-md-4">
                <div class="card" style="border-radius: 20px;">
                    <img src="{{ asset('images/userlogo.png') }}" class="card-img-top" alt="User Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido, usuario cliente.</h5>
                        <p class="card-text">Usuario identificado: {{ Auth::user()->name }}</p>
                    </div>
                </div>
            </div>

            <!-- Información del perfil -->
            <div class="col-md-8">
                <h2>Mi Perfil</h2>
                <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <a href="{{ route('profiles.edit') }}" class="btn btn-primary">Editar Perfil</a>
                <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
            </div>
        </div>
    </div>
</section>
@endsection
