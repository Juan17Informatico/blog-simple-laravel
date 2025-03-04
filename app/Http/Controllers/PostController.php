<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'author' => 'required|min:3'
        ]);

        Post::create($request->all());

        return redirect()->route('home')->with('success', 'Post creado correctamente');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'author' => 'required|min:3'
        ]);

        $post->update($request->all());

        return redirect()->route('home')->with('success', 'Post actualizado correctamente');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('home')->with('success', '❌ Post eliminado correctamente.');
    }

}
