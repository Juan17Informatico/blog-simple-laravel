@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $post->title }}</h1>
        <p class="text-gray-700">{{ $post->content }}</p>
        <p class="text-gray-500 text-sm">Escrito por: {{ $post->author }}</p>

        <div class="flex justify-between mt-4">
            <a href="{{ route('home') }}"
                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                ⬅ Volver
            </a>

            <div class="flex space-x-2">
                <a href="{{ route('posts.edit', $post->id) }}"
                    class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                    ✏ Editar
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirmDelete()">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                        🗑 Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("⚠ ¿Seguro que quieres eliminar este post? Esta acción no se puede deshacer.");
        }
    </script>
@endsection
