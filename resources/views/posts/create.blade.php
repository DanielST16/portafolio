@extends('layouts.app')

@section('title', 'Contact | Daniel')

@section('content')

    <a href="{{ route('posts.index') }}"
        class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded transition-colors duration-200">
        Volver a la lista de posts
    </a>


    <div class="container mx-auto p-4">
        
        <h1 class="text-3xl font-bold mb-4">Nuevo post</h1>

        {{-- @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <h2>Errores:</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif --}}

        <form action="{{ route('posts.index') }}" method="POST" class="bg-white p-6 rounded shadow-md">

            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" id="title" name="title" value="{{old('title')}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" id="slug" name="slug" value="{{old('slug')}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('slug')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Contenido</label>
                <textarea id="content" name="content" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{old('content')}}</textarea>
                @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded-md hover:bg-blue-700">Crear Post</button>

        </form>

        {{-- <form action="/posts/"></form> --}}
    </div>
@endsection