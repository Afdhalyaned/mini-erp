@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Edit Product Category : <strong>{{ $productCategory->name }}</strong></h3>
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
        <form action="{{ route('product-categories.update', $productCategory->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            {{-- product name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{ $productCategory->name }}">
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