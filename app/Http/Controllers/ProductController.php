<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_deleted', '!=', true)->get();

        return view('product.list', [
            'title' => 'product-list',
            'products' => $products
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request);
        $product = new Product;
        $product->name = $request->name;
        $product->sku_code = $request->sku_code;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->is_deleted = false;
        $product->save();
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('product.detail', [
            'title' => 'product-list',
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {
        return view('product.edit', [
            'title' => 'product-list',
            'product' => $product
        ]);
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $product = Product::findorfail($id);
        $product->name = $request->name;
        $product->sku_code = $request->sku_code;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->is_deleted = false;
        $product->save();
        // dd($product);
        return redirect('/products')->with('status', 'data updated');
    }

    public function destroy(Product $product)
    {
        $product->is_deleted = true;
        $product->save();
        return redirect('/products')->with('status', 'data deleted');
    }
}
