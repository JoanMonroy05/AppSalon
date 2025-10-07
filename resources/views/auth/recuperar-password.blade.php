@extends('layout')

@section('title', 'Recuperar Contraseña')

@section('content')
    <h1 class="nombre-pagina">Recuperar Contraseña</h1>
    <p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>
    @include('partials.alertas')
    @if(!session('error'))
        <form action="{{ route('password.reset.submit', ['token' => $token]) }}" method="POST">
            @csrf
                <div class="campo">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Tu Nueva Contraseña" minlength="6"
                        required />
                </div>
                <input type="submit" class="boton" value="Restablecer Contraseña" />
        </form>
    @endif
    <div class="acciones">
        <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
        <a href="/crear">¿Aún no tienes una cuenta? Crear una</a>
    </div>
@endsection
