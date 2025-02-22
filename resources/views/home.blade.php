@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1 class="text-3xl font-bold text-center my-4">Bienvenido a Mi Blog</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div class="border p-4 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500">Leer más...</a>
            </div>
        @endforeach
    </div>
@endsection