@extends('layout')

@section('title', 'Olvide Contraseña')

@section('content')
<h1 class="nombre-pagina">Olvide Contraseña</h1>
<p class="descripcion-pagina">Restablece tu contraseña escribiendo tu email</p>
<form action="{{ route('password.reset.submit') }}" class="formulario" method="POST">
    @csrf
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Tu Email"
        />                                        
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión" />
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear">¿Aún no tienes una cuenta? Crear una</a>
</div>
@endsection