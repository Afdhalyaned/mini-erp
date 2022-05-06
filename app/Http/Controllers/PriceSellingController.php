<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceSelling;
use App\Models\Product;

class PriceSellingController extends Controller
{
    public function index()
    {
        $products = Product::get();

        // foreach($products as $product){
        //     $priceBuying = $product->priceBuying->first();
        //     var_dump($priceBuying->price);
        // }
        // $priceBuying = $products->priceBuying->first();
        // dd($priceBuying->price);
        return view('price-selling.index', [
            'title'=>'price-selling-list',
            'products'=> $products
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        // $margin_category = $product->priceSelling->margin_category;
        // dd($margin_category);
        return view('price-selling.edit', [
            'title'=>'price-selling-list',
            'product' => $product
        ]);
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $priceSelling = PriceSelling::where('product_id', $id)->first();
        if($priceSelling){
            $priceSelling->margin_category = $request->margin_category;
            $priceSelling->margin_value = $request->margin_value;
            if($request->margin_category == 'percent'){
                $selling_value = $request->buyingPrice+($request->buyingPrice*$request->margin_value/100);
            }elseif($request->margin_category == 'nominal'){
                $selling_value = $request->buyingPrice+$request->margin_value;
            }elseif($request->margin_category == 'sellingPrice'){
                $selling_value = $request->margin_value;
            }else{
                $selling_value = null;
            }
            // dd($selling_value);
            $priceSelling->selling_price = $selling_value;
            $priceSelling->save();
        }else{
            $priceSelling = new PriceSelling;
            $priceSelling->product_id = $id;
            $priceSelling->margin_category = $request->margin_category;
            $priceSelling->margin_value = $request->margin_value;
            if($request->margin_category == 'percent'){
                $selling_value = $request->buyingPrice+($request->buyingPrice*$request->margin_value/100);
            }elseif($request->margin_category == 'nominal'){
                $selling_value = $request->buyingPrice+$request->margin_value;
            }elseif($request->margin_category == 'sellingPrice'){
                $selling_value = $request->margin_value;
            }else{
                $selling_value = null;
            }
            $priceSelling->selling_price = $selling_value;
            $priceSelling->save();

        }
        return redirect()->route('price-selling.index');
    }
}
