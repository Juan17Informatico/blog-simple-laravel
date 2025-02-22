<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Blog')</title>
    @vite('resources/css/app.css') {{-- Asegurar que Tailwind se carga correctamente --}}
</head>

<body class="bg-gray-100 text-gray-900">

    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-white text-xl font-bold">Mi Blog</a>
            <a href="{{ route('posts.create') }}"
                class="px-4 py-2 bg-white text-blue-600 font-semibold rounded hover:bg-gray-100">
                Crear Post
            </a>
        </div>
    </nav>

    <div class="container mx-auto mt-6 px-4">
        @yield('content')
    </div>

</body>
</html>