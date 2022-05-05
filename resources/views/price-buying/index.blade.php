@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Buying Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Buying Price
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
<h4 class="mb-3">Update Product Price</h4>
<form action="{{ route('price-buying.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6">
             {{-- product name --}}
             <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <select class="form-select" name="product_id">
                    <option selected>Select Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            {{-- pricing date --}}
            <div class="mb-3">
                <label for="updated_date" class="form-label">Date</label>
                <input type="date" class="form-control" name="updated_date" value="{{ date('Y-m-d') }}" required>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            {{-- product purchase price --}}
            <div class="mb-3">
                <label for="price" class="form-label">New Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" name="price" value="$today" required>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            {{-- supplier name --}}
            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <select class="form-select" name="supplier">
                    <option selected>Select Supplier</option>
                    <option value="PT Toko Pak Edi">PT Toko Pak Edi</option>
                    <option value="PT Lupa Bapak">PT Lupa Bapak</option>
                    <option value="PT Copi">PT Copi</option>
                    <option value="PT Lisa">PT Lisa</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="d-grid gap-2">
                <button class="btn btn-primary mt-3" type="submit">Save</button>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success mt-3" type="button">Import Excel</button>
            </div>
        </div>
    </div>
</form>

<hr>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="datatable table table-stripped" id="priceBuying"
                    >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>SKU Code</th>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Buying Price</th>
                                <th>Price Update</th>
                                <th>Supplier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($priceBuying as $price)
                                <tr>
                                    <td>{{ $price->id }}</td>
                                    <td>{{ $price->product->sku_code }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $price->product->id) }}">
                                            {{ $price->product->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('product-categories.show', $price->product->productCategory->id) }}" class="badge bg-primary">
                                            {{ $price->product->productCategory->name }}
                                        </a>
                                    </td>
                                    <td>
                                        {{number_format($price->price)}}
                                    </td>
                                    <td>{{ $price->updated_date }}</td>
                                    <td>{{ $price->supplier }}</td>
                                    <td>
                                        <a href="{{ route('price-buying.edit', $price) }}">
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                    </td>
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

@section('script')
@endsection

