<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctlAbout extends Controller
{
    public function __invoke()
    {
        return view('about');
    }
}
