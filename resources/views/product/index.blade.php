@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-10">
            <h3 class="page-title">List Produk</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Product
                </li>
            </ul>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProduct">Add Product</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="datatable table table-stripped"
                    >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>SKU Code</th>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                {{-- product ID --}}
                                <td>{{ $product->id }}</td>
                                {{-- product image --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="User Image" src="{{ asset('storage/product/'.$product->image) }}">
                                        </div>
                                </td>
                                {{-- sku code --}}
                                <td>{{ $product->sku_code }}</td>
                                {{-- product name --}}
                                <td>{{ $product->name }}</td>
                                {{-- product category --}}
                                <td>
                                    <a href="{{ route('product-categories.show', $product->category_id) }}">
                                        <div class="badge bg-primary">
                                            {{ $product->productCategory->name }}
                                        </div>
                                    </a>
                                </td>
                                {{-- action --}}
                                <td>
                                    {{-- detail --}}
                                    <a href="{{ route('products.show', $product) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                    </a>
                                    {{-- delete --}}
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="return confirm('Are you sure wanna delete this record?')" class="btn btn-secondary btn-sm">Delete</button>
                                    </form>
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

{{-- modalf --}}
<div class="modal fade" id="newProduct" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form --}}
          <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            {{-- product name --}}
            @csrf
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option value="" selected class="text-center">--- Open this select menu ---</option>
                    @foreach ($productCategories as $productCategory)
                        <option value="{{ $productCategory->id }}" >{{ $productCategory->name }}</option>
                        
                    @endforeach
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="sku_code" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="sku_code">
            </div>


            {{-- product detail --}}
            <div class="mb-3">
                <label for="decription" class="form-label">Product Detail</label>
                <textarea class="form-control" rows="3" name="description"></textarea>
            </div>

            {{-- product image --}}
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input class="form-control" type="file" name="image">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')

@endsection

