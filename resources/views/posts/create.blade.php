@extends('layouts.app')

@section('title', 'Crear Post')

@section('content')
    <h1 class="text-3xl font-bold text-center my-4">Crear un Nuevo Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Título:</label>
            <input type="text" name="title" class="border p-2 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Autor:</label>
            <input type="text" name="author" class="border p-2 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Contenido:</label>
            <textarea name="content" rows="4" class="border p-2 rounded w-full" required></textarea>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                Volver
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Publicar
            </button>
        </div>
    </form>
@endsection
