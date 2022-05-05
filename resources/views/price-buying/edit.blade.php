@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Edit Buying Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('price-buying.index') }}">Buying Price</a> 
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Product Price</a> 
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('price-buying.update',$priceBuying) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name" value="{{ $priceBuying->product->name }}" disabled>
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" disabled>
                    <option value="{{ $priceBuying->product->productCategory->id }}">{{ $priceBuying->product->productCategory->name }}</option>
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="product-sku" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="product-sku" value="{{ $priceBuying->product->sku_code }}" disabled>
            </div>

            {{-- product purchase price --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Purchase Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" ame="product-name" value="{{ $priceBuying->price }}" required>
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            {{-- pricing date --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Price Date</label>
                <input type="date" class="form-control" name="product-name" value="{{ $priceBuying->updated_date }}" required>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal">Save</button>
            </div>
        </form>

        </div>
        <div class="col">
            <div class="image">
                <img src="assets/img/product/matrix-nvr.jpg" alt="">
            </div>
            
        </div>
</div>
@endsection