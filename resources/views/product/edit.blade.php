@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <h4>Edit Product</h4>
        <form action="product-update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name" value="SATATYA NVR25608XCTS">
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="1">CCTV</option>
                    <option selected value="2">NVR</option>
                    <option value="3">Hard Disk</option>
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="product-sku" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="product-sku" value="Matrix-NVR-256-08-CTS">
            </div>

            {{-- product detail --}}
            <div class="mb-3">
                <label for="product-decription" class="form-label">Product Detail</label>
                <textarea class="form-control" rows="5" name="product-description">256 Channel Enterprise Range Server Grade NVR with 4K Support and 8HDD Slots • 256 IP Channel Inputs; Display: 1 x VGA and 2 x Display Port • Dual Input Hot Swap Redundant (1+1) Power Supply • 8 Hot Swap 3 5"/2 5" SATA HDD/SSD Drive Bay (18TB Capacity, Hard Disk Not Included) • 4x 1 GbE Lan port ; 512 Mbps Uplink & 512 Mbps Downlink • Onvif & Major Brand Camera Support with 12MP, 8MP, 5MP,3MP, 2MP, 1080P, D1 & CIF Recording • 1 x 4k/4 x 1080P/12 x 720P/16 x D1 Local Decoding • Remote and Centralized Viewing and Management and Mobile Clients • Multi-stream Support, Real Time Notification using SMS & Email</textarea>
            </div>

            {{-- product image --}}
            <div class="mb-3">
                <label for="product-image" class="form-label">Product Image</label>
                <input class="form-control" type="file" name="product-image">
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