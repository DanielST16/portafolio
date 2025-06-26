<?php

use App\Http\Controllers\ctlAbout;
use App\Http\Controllers\ctlContact;
use App\Http\Controllers\ctlHome;
use App\Http\Controllers\ctlPortafolio;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', ctlHome::class);
Route::get('/about', ctlAbout::class);
Route::get('/contact', [ctlContact::class, 'index']);
Route::get('portafolio', [ctlPortafolio::class, 'index']);


Route::get('prueba', function () {
    
    // $post = new Post();
    // $post->title = 'Prueba de Post';
    // $post->slug = 'prueba-de-post';
    // $post->content = 'Este es el contenido de la prueba de post.';
    // $post->status = 'published'; // published, draft, etc.
    // $post->save();

    $post = Post::find(1);

    if ($post->published_at === null) {
        return 'no ha sido publicado';
    }else{
        return $post->published_at->format('Y-m-d');
    }
});