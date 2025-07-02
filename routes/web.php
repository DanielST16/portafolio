<?php

use App\Http\Controllers\ctlAbout;
use App\Http\Controllers\ctlContact;
use App\Http\Controllers\ctlHome;
use App\Http\Controllers\ctlPortafolio;
use App\Http\Controllers\ctlPost;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', ctlHome::class) ->name('home');
Route::get('/about', ctlAbout::class) ->name('about');
Route::get('/contact', [ctlContact::class, 'index']) ->name('contact');
Route::get('/portafolio', [ctlPortafolio::class, 'index']) ->name('portafolio');


// Route::get('/posts', [ctlPost::class, 'index']) ->name('posts.index');
// Route::get('/posts/create', [ctlPost::class, 'create']) ->name('posts.create');
// Route::post('/posts', [ctlPost::class, 'store']) ->name('posts.store');
// Route::get('/posts/{post}', [ctlPost::class, 'show']) ->name('posts.show');
// Route::get('/posts/{post}/edit', [ctlPost::class, 'edit']) ->name('posts.edit');
// Route::put('/posts/{post}', [ctlPost::class, 'update']) ->name('posts.update');
// Route::delete('/posts/{post}', [ctlPost::class, 'destroy']) ->name('posts.destroy');

Route::resource('posts', ctlPost::class);
