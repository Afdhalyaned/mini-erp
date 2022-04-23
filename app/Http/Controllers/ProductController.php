<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.list', ['title' => 'product-list']);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        return view('product.detail', ['title' => 'product-list']);
    }

    public function edit(Product $product)
    {
        return view('product.edit', ['title' => 'product-list']);
    }

    public function update(Request $request, Product $product)
    {
        return redirect('/product')->with('status', 'data updated');
    }

    public function destroy(Product $product)
    {
        return redirect('/product')->with('status', 'data updated');
    }
}
