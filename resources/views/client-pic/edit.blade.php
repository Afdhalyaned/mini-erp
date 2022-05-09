@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Edit Company PIC</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('price-selling.index') }}">(company name)</a> 
                </li>
                <li class="breadcrumb-item active">
                    Selling Price
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name" value="" disabled>
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

@section('script')

@endsection