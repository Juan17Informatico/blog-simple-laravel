@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p class="text-gray-500 text-sm">Escrito por: {{ $post->author }}</p>
    <a href="{{ route('posts.index') }}">Volver</a>
@endsection