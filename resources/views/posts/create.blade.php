@extends('layouts.app')

@section('title', 'Crear Post')

@section('content')
    <h1>Crear Nuevo Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Título" required>
        <textarea name="content" placeholder="Contenido" required></textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection