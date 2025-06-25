<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctlPortafolio extends Controller
{
    public function index()
    {
        return view('portafolio.index');
    }

    public function show($id)
    {
        // Here you would typically fetch the portfolio item by its ID
        // For now, we'll just return a view with the ID
        return view('portafolio_item', ['id' => $id]);
    }

    public function create()
    {
        // This method could return a view to create a new portfolio item
        return view('create_portfolio_item');
    }


}
