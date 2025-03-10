<!-- Profile - Editar perfil -->
<!-- resources/views/profile/edit.blade.php -->
@extends('layouts.app')

@section('content')
<section id="register" class="container-grid padding-large position-relative overflow-hidden">
<div class="container">
    <h2>Editar Perfil</h2>
    <form action="{{ route('profiles.update') }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ auth()->user()->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
</section>
@endsection