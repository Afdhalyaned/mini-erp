@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Selling Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Selling Price
                </li>
            </ul>
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
                                <th>Buying Price</th>
                                <th>Margin Category</th>
                                <th>Margin value</th>
                                <th>Selling Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    {{-- ID --}}
                                    <td>{{ $product->id }}</td>
                                    {{-- Product Image --}}
                                    <td>
                                        <div class="avatar">
                                            <img class="avatar-img rounded" alt="User Image" src="storage/product/{{ $product->image }}">
                                        </div>
                                    </td>
                                    {{-- SKU Code --}}
                                    <td>{{ $product->sku_code }}</td>

                                    {{-- Product Name --}}
                                    <td>{{ $product->name }}</td>

                                    {{-- Product Category --}}
                                    <td>
                                        <div class="badge bg-primary">
                                            {{ $product->productCategory->name }}
                                        </div>
                                    </td>

                                    {{-- Buying Price --}}
                                    <td>
                                        @if ($product->priceBuying->last())
                                            @php
                                            //    $priceBuying = $product->priceBuying->last()
                                            @endphp
                                            {{ number_format($product->priceBuying->last()->price) }}
                                        @endif
                                    </td>

                                    {{-- Margin Gategory --}}
                                    <td>
                                        @if ($product->priceSelling)
                                            <div class="badge bg-success">
                                                @if ($product->priceSelling->margin_category == 'sellingPrice')
                                                    selling price
                                                @else
                                                    {{ $product->priceSelling->margin_category }}
                                                @endif
                                            </div>
                                        @endif
                                    </td>

                                    {{-- Margin Value --}}
                                    <td>
                                        @if ($product->priceSelling)
                                        {{ number_format($product->priceSelling->margin_value) }}

                                            @if ($product->priceSelling->margin_category == 'percent')
                                                {{ ' %' }}
                                            @endif
                                        @endif
                                    </td>

                                    <td>
                                        @if ($product->priceSelling)
                                        {{ number_format($product->priceSelling->selling_price) }}
                                        @endif
                                    </td>
                                    <td>
                                        @if (!$product->priceBuying->last())
                                            <a href="{{ route('price-buying.show', $product->id) }}">
                                                <button type="button" class="btn btn-danger btn-sm">Update Buying Price</button>
                                            </a>
                                        @else
                                            <a href="{{ route('price-selling.edit', $product->id) }}">
                                                <button type="button" class="btn btn-primary btn-sm">Set selling price</button>
                                            </a>
                                        @endif
                                        
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
          <form action="/product-new" method="post" enctype="multipart/form-data">
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name">
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">CCTV</option>
                    <option value="2">NVR</option>
                    <option value="3">Hard Disk</option>
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="product-sku" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="product-sku">
            </div>


            {{-- product detail --}}
            <div class="mb-3">
                <label for="product-decription" class="form-label">Product Detail</label>
                <textarea class="form-control" rows="3" name="product-description"></textarea>
            </div>

            {{-- product image --}}
            <div class="mb-3">
                <label for="product-image" class="form-label">Product Image</label>
                <input class="form-control" type="file" name="product-image">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')

@endsection

