@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <h4>Edit Product</h4>
        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            {{-- product name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Product Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach ($productCategories as $productCategory)
                        <option value="{{ $productCategory->id }}" {{ ($product->category_id==$productCategory->id) ? 'selected' : ''}}>{{ $productCategory->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="sku_code" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="sku_code" value="{{ $product->sku_code }}">
            </div>

            {{-- product detail --}}
            <div class="mb-3">
                <label for="description" class="form-label">Product Detail</label>
                <textarea class="form-control" rows="5" name="description">{{ $product->description }}</textarea>
            </div>

            {{-- product image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input class="form-control" type="file" name="image">
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