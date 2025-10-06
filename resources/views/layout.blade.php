<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="contenedor-app">
        <div class="imagen"></div>
        <div class="app">
            @yield('content')
        </div>
    </div>
</body>
</html>