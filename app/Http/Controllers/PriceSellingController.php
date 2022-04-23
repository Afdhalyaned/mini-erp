<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceSellingController extends Controller
{
    public function index()
    {
        return view('price-selling.list', ['title'=>'price-selling-list']);
    }
}
