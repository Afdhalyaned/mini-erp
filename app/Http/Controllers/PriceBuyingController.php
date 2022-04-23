<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceBuyingController extends Controller
{
    public function index()
    {
        return view('price-buying.list', ['title' => 'price-buying-list']);
    }

    public function create()
    {
        return view('price-buying.create',['title' => 'price-buying-list']);
    }

    public function store()
    {
        return redirect('/price-buying-list')->withSuccess('Success');
    }

    public function edit()
    {
        return view('price-buying.edit', ['title' => 'product-list']);
    }

    public function update()
    {
        return redirect('/price-buying')->withSuccess('Updating price is successful');
    }

    public function destoy()
    {
        return redirect('/price-buying-list');
    }

    
}
