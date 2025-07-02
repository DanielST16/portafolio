@extends('layouts.app')

@section('title', 'Posts | Daniel')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Bienvenido los Posts</h1>

        <a href="{{ route('posts.create') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded transition-colors duration-200">
            Crear un nuevo post
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post)}}" class="text-blue-500 hover:underline">Leer más</a>
                </div>
            @endforeach
        <div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
@endsection