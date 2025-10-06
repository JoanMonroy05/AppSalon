@extends('layout')

@section('content')
<h1 class="nombre-pagina">Iniciar Sesión</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>
<form action="{{ route('login.store') }}" class="formulario" method="POST">
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
    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Tu Contraseña"
        />
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión" />
</form>
<div class="acciones">
    <a href="/crear">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>
@endsection