<?php

use App\Http\Controllers\ctlAbout;
use App\Http\Controllers\ctlContact;
use App\Http\Controllers\ctlHome;
use App\Http\Controllers\ctlPortafolio;
use App\Http\Controllers\ctlPost;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', ctlHome::class);
Route::get('/about', ctlAbout::class);
Route::get('/contact', [ctlContact::class, 'index']);
Route::get('/portafolio', [ctlPortafolio::class, 'index']);


Route::get('/posts', [ctlPost::class, 'index']);
Route::get('/posts/create', [ctlPost::class, 'create']);
Route::post('/posts', [ctlPost::class, 'store']);
Route::get('/posts/{post}', [ctlPost::class, 'show']);
Route::get('/posts/{post}/edit', [ctlPost::class, 'edit']);
Route::put('/posts/{post}', [ctlPost::class, 'update']);
Route::delete('/posts/{post}', [ctlPost::class, 'destroy']);
