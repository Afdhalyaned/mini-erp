<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategories;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = ProductCategories::where('is_deleted', '!=', true)->get();
        return view('product-categories.index', [
            'title' => 'product categories',
            'productCategories' => $productCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $productCategories = new ProductCategories;
        $productCategories->name = $request->name;
        $productCategories->is_deleted = false;
        $productCategories->save();
        return redirect()->route('product-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategories $productCategory)
    {
        return view('product-categories.edit', [
            'title' => 'product-categories',
            'productCategory' => $productCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productCategory = ProductCategories::findorfail($id);
        $productCategory->name = $request->name;
        $productCategory->save();
        return redirect()->route('product-categories.index')->with('status', 'record has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCategory = ProductCategories::findorfail($id);
        $productCategory->is_deleted = true;
        $productCategory->save();
        return redirect('product-categories.index')->with('status', 'record has been updated');
    }
}
