@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
        <p class="text-gray-700 text-lg leading-relaxed mb-4">{{ $post->content }}</p>
        <p class="text-gray-500 text-sm">Escrito por: <span class="font-semibold">{{ $post->author }}</span></p>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('home') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
                ⬅ Volver a la lista
            </a>
            <a href="{{ route('posts.edit', $post) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                ✏ Editar Post
            </a>
        </div>
    </div>
@endsection
