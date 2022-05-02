@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Product Category : <strong>{{ $productCategory->name }}</strong></h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('product-categories.index') }}">
                        Product Category
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    {{ $productCategory->name }}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table mb-0">
                    <tbody>
                        <tr>
                            <td><strong>Category ID</strong></td>
                            <td>{{ $productCategory->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Category Name</strong></td>
                            <td>{{ $productCategory->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('product-categories.edit', $productCategory) }}">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </a>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product of <strong>{{ $productCategory->name }}</strong> category</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive no-radius">
                    <table class="table table-hover table-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>SKU Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                {{-- product id --}}
                                <td>{{ $product->id }}</td>
                                {{-- product image --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="User Image" src="{{ asset('storage/product/'.$product->image) }}">
                                        </div>
                                </td>
                                {{-- product name --}}
                                <td>{{ $product->name }}</td>
                                {{-- sku code --}}
                                <td>{{ $product->sku_code }}</td>
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