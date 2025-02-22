@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-3xl font-bold text-center my-4">Bienvenido a Mi Blog</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 shadow-md">
            + Nuevo Post
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white border p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                <p class="text-sm text-gray-500">Autor: {{ $post->author }}</p>
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500 mt-2 block">Leer más...</a>
            </div>
        @endforeach
    </div>
@endsection
