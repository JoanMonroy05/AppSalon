<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restablece tu contraseña</title>
</head>
<body>
    <h1>Hola {{ $usuario->nombre }} 👋</h1>
    <p>Gracias por registrarte. Haz clic en el botón para restablecer tu contraseña:</p>

    <a href="{{ url('/recuperar/'.$token) }}" 
        style="display:inline-block; padding:10px 20px; background:#4CAF50; color:white; text-decoration:none; border-radius:5px;">
        Restablecer contraseña
    </a>

    <p>O copia este enlace en tu navegador:</p>
    <p>{{ url('/recuperar/'.$token) }}</p>

    <p>Si no te has registrado, ignora este correo.</p>
    <p>¡Gracias!</p>
    <p>El equipo de AppSalon</p>
</body>
</html>
