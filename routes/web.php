<?php

use App\Http\Controllers\ctlAbout;
use App\Http\Controllers\ctlContact;
use App\Http\Controllers\ctlHome;
use App\Http\Controllers\ctlPortafolio;
use Illuminate\Support\Facades\Route;

Route::get('/', ctlHome::class);
Route::get('/about', ctlAbout::class);
Route::get('/contact', [ctlContact::class, 'index']);
Route::get('portafolio', [ctlPortafolio::class, 'index']);