<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // image
        if($request->file('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            $path = Storage::putFileAs('public/storage/product', $file, $name);
            $product->image = $path;
        }
        
        $product->description = $request->description;
        $product->is_deleted = false;
        // dd($path);
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
        $productCategories = ProductCategories::where('is_deleted', false)->get();
        
        return view('product.edit', [
            'title' => 'product-list',
            'product' => $product,
            'productCategories' => $productCategories
        ]);
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $product = Product::findorfail($id);
        $product->name = $request->name;
        $product->sku_code = $request->sku_code;
        $product->category_id = $request->category_id;
        // dd($request->file('image'));
        // image
        if($request->file('image')){
            $file = $request->file('image');
            $name = $file->hashName();
            $path = Storage::putFileAs('public/product', $file, $name);
            $product->image = $name;
        }
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
