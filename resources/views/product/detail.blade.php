@extends('layouts.master')

@section('content')
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
@endsection