@extends('layouts.app')

@section('title', 'Crear Post')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-900 mb-4">Crear Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4" onsubmit="return confirmSubmit()">
            @csrf

            <div>
                <label for="title" class="block text-gray-700 font-semibold">Título:</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-semibold">Contenido:</label>
                <textarea id="content" name="content" rows="6"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="author" class="block text-gray-700 font-semibold">Autor:</label>
                <input type="text" id="author" name="author" value="{{ old('author') }}"
                    class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('author') border-red-500 @enderror">
                @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}"
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                    ⬅ Volver
                </a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    📌 Publicar
                </button>
            </div>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            return confirm("¿Estás seguro de que quieres publicar este post?");
        }
    </script>
@endsection