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
        $productCategories = ProductCategories::where('is_deleted', '!=', true)->get();

        return view('product.index', [
            'title' => 'product-list',
            'products' => $products,
            'productCategories' => $productCategories
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
            $path = Storage::putFileAs('public/product', $file, $name);
            $product->image = $name;
        }
        
        $product->description = $request->description;
        $product->is_deleted = false;
        // dd($path);
        $product->save();
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $priceBuying = Product::findorfail($product->id)->priceBuying;
        // dd($priceBuying);
        return view('product.detail', [
            'title' => 'product-list',
            'product' => $product,
            'priceBuying' => $priceBuying
        ]);
    }

    public function edit(Product $product)
    {
        $productCategories = ProductCategories::where('is_deleted', false)->get();
        dd($product);
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
        return redirect()->route('products.show',$id)->with('status', 'data updated');
    }

    public function destroy(Product $product)
    {
        $product->is_deleted = true;
        $product->save();
        return redirect('/products')->with('status', 'data deleted');
    }
}
