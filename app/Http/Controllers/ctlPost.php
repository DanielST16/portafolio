<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ctlPost extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $posts = Post::orderBy('id','desc')->paginate(12);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'content' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
