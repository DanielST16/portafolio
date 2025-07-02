@extends('layouts.app')

@section('title', 'Posts | Daniel')

@section('content')

    <a href="{{ route('posts.index') }}"
        class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded transition-colors duration-200">
        Volver a la lista de posts
    </a>
    <div class="container mx-auto p-4">

        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

        <p>{{$post->content}}</p>

        <a href="{{ route('posts.edit', $post) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded transition-colors duration-200">
            Editar
        </a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded transition-colors duration-200">
                Eliminar
            </button>
        </form>

    </div>
@endsection