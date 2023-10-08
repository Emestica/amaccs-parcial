<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <header>

    </header>
    <div class="sidebar">

    </div>
    <main>
        <div class="container mt-3">
            @yield('contenido')
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>