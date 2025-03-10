@extends('layouts.app')

<title>8-bit Emporium | Iniciar sesión</title>

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg d-flex flex-row">
                <!-- Imagen a la izquierda -->
                <div class="col-md-6 d-none d-md-block p-0">
                    <img src="{{ asset('images/videogames_login.jpg') }}" alt="Videojuegos" class="img-fluid h-100 w-100" style="object-fit: cover; border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;">
                </div>

                <!-- Formulario de inicio de sesión -->
                <div class="col-md-6 p-4">
                    <div class="card-header text-center bg-primary text-white fs-4 fw-bold rounded">
                        {{ __('Iniciar sesión') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="link-primary" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>

                            
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
                            </div>
                            
                

                            @if (Route::has('register'))
                                <div class="mt-3 text-center">
                                    <span>{{ __("¿No tienes cuenta?") }}</span>
                                    <a class="link-primary fw-semibold" href="{{ route('register') }}">
                                        {{ __('Registrarme') }}
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

