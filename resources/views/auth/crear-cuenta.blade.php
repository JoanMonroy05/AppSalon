@extends('layout')

@section('content')
<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>
<form action="{{ route('crear.store') }}" class="formulario" method="POST" novalidate>
    {{-- Mostrar mensajes de error --}}
    @include('partials.alertas')
    {{-- Proteccion contra CSRF --}}
    @csrf
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text" 
            id="nombre" 
            name="nombre" 
            placeholder="Tu Nombre"
            maxlength="60"
            value="{{ old('nombre') }}"
            required
        />                                        
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input 
            type="text" 
            id="apellido" 
            name="apellido" 
            placeholder="Tu Apellido"
            maxlength="60"
            value="{{ old('apellido') }}"
            required
        />                                        
    </div>
    <div class="campo">
        <label for="telefono">Telefono</label>
        <input 
            type="tel"
            id="telefono" 
            name="telefono" 
            placeholder="Tu Telefono"
            maxlength="10"
            pattern="[0-9]{10}"
            value="{{ old('telefono') }}"
            required
        />                                        
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Tu Email"
            maxlength="30"
            value="{{ old('email') }}"
            required
        />                                        
    </div>
    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Tu Contraseña"
            minlength="6"
            required
        />
    </div>
    <input type="submit" class="boton" value="Crear Cuenta" />
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>
@endsection