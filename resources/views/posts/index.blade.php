@extends('layouts.app')

@section('title', 'Lista de Posts')

@section('content')
    <h1>Lista de Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Nuevo Post</a>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></li>
            <p class="text-gray-500 text-sm">Autor: {{ $post->author }}</p>
        @endforeach
    </ul>
@endsection
