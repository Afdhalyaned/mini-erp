<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\PriceBuying;
use App\Models\Product;

class PriceBuyingController extends Controller
{
    public function index()
    {   
        $priceBuying = PriceBuying::all();
        $products = Product::where('is_deleted', false)->get();
        return view('price-buying.index', [
            'title' => 'price-buying-list',
            'priceBuying' => $priceBuying,
            'products' => $products,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {   
        $priceBuying = new PriceBuying;
        $priceBuying->product_id = $request->product_id;
        $priceBuying->updated_date = $request->updated_date;
        $priceBuying->price = $request->price;
        $priceBuying->supplier = $request->supplier;
        $priceBuying->save();

        return redirect('/price-buying')->withSuccess('Success');
    }

    public function show($id)
    {
        $product = Product::find($id);
        // dd($product->id);
        return view('price-buying.create', [
            'title' => 'price-buying-list',
            'product' => $product,
        ]);

    }

    public function edit(PriceBuying $priceBuying)
    {
        
        return view('price-buying.edit', [
            'title' => 'price-buying-list',
            'priceBuying' => $priceBuying
        ]);
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
