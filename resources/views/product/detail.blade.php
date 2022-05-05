@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" />
@endsection

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-10">
            <h3 class="page-title">{{ $product->name }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('products.index') }}">Products</a> 
                </li>
                <li class="breadcrumb-item active">
                    {{ $product->name }}
                </li>
            </ul>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProduct">Add Product</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4>Product Detail</h4>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table mb-0">
                    <tbody>
                        <tr>
                            <td><strong>Product ID</strong></td>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Product Name</strong></td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Product Category</strong></td>
                            <td>
                                <div class="badge bg-primary">
                                    {{ $product->productCategory->name }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SKU Code</strong></td>
                            <td>{{ $product->sku_code }}</td>
                        </tr>
                        <tr>
                            <td><strong>Product Description</strong></td>
                            <td><p>{{ $product->description }}</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="image">
            @if($product->image)
                <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->image }}" height="300px">
            @endif
        </div>
    </div>
</div>
<div class="row text-right">
    <div class="col-sm-6 text-right">
        <a href="{{ route('products.edit', $product) }}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Price Buying <strong>{{ $product->name }}</strong></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive no-radius">
                    <table class="datatable table table-stripped table-hover table-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Supplier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($priceBuying as $price)
                            <tr>
                                {{-- id --}}
                                <td>{{ $price->id }}</td>
                                {{-- Date --}}
                                <td>{{ $price->updated_date }}</td>
                                {{-- Price --}}
                                <td>{{ number_format($price->price) }}</td>
                                {{-- Supplier --}}
                                <td>{{ $price->supplier }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection