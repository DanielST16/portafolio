<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Daniel Sierra')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Esto carga los estilos y scripts --> --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900 pt-16">
    @include('layouts.topbar')

    <main class="p-4">
        @yield('content') <!-- Aquí va el contenido de cada página -->
    </main>
</body>

</html>
