<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        return view('offer.list',['title' => 'offer']);
    }

    public function show()
    {
        return view('offer.detail',['title' => 'offer']);
    }
}
