@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <h4>Update Price</h4>
        <form action="/price-buying-update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name" value="SATATYA NVR25608XCTS" disabled>
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" aria-label="Default select example" disabled>
                    <option value="1">CCTV</option>
                    <option selected value="2">NVR</option>
                    <option value="3">Hard Disk</option>
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="product-sku" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="product-sku" value="Matrix-NVR-256-08-CTS" disabled>
            </div>

            {{-- product purchase price --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Purchase Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" ame="product-name" value="" required>
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            

            {{-- pricing date --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Price Date</label>
                <input type="date" class="form-control" name="product-name" value="2022-04-23" required>
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