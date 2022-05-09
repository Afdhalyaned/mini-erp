<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientPicController extends Controller
{
    public function edit()
    {
        return view('client-pic.edit');
    }

    public function update()
    {
        return redirect()->route('clients.show', 5);
    }

    public function store()
    {
        return redirct()->route('clients.show', 5);
    }
}
