@extends('layouts.app')

<title>8-bit Emporium | Registrarme</title>

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg d-flex flex-row">
                <!-- Imagen a la izquierda -->
                <div class="col-md-6 d-none d-md-block p-0">
                    <img src="{{ asset('images/Register_videogames.jpg') }}" alt="Registro Videojuegos" class="img-fluid h-100 w-100" style="object-fit: cover; border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;">
                </div>

                <!-- Formulario de registro -->
                <div class="col-md-6 p-4">
                    <div class="card-header text-center bg-primary text-white fs-4 fw-bold rounded">
                        {{ __('Registrarte') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>

                            @if (Route::has('login'))
                                <div class="mt-3 text-center">
                                    <span>{{ __("¿Ya tienes una cuenta?") }}</span>
                                    <a class="link-primary fw-semibold" href="{{ route('login') }}">
                                        {{ __('Iniciar sesión') }}
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div> <!-- Fin del formulario -->
            </div>
        </div>
    </div>
</div>
@endsection

