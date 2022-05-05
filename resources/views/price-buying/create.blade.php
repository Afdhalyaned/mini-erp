@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Add Buying Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('price-buying.index') }}">Buying Price</a> 
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Add Buying Price</a> 
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('price-buying.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- product name --}}
            <div class="mb-3">
                <label for="product_id" class="form-label">Product Name</label>
                <select class="form-select" name="product_id">
                    <option value="{{ $product->id }}" selected>{{ $product->name }}</option>
                </select>
            </div>

            {{-- pricing date --}}
            <div class="mb-3">
                <label for="updated_date" class="form-label">Price Date</label>
                <input type="date" class="form-control" name="updated_date" value="{{ date('Y-m-d') }}" required>
            </div>

            {{-- product purchase price --}}
            <div class="mb-3">
                <label for="price" class="form-label">Product Purchase Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" name="price" value="" required>
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            {{-- supplier --}}
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