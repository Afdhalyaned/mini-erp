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
                            <tr>
                                {{-- ID --}}
                                <td>1</td>
                                {{-- Product Image --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="User Image" src="assets/img/product/matrix-nvr.jpg">
                                    </div>
                                </td>
                                {{-- SKU Code --}}
                                <td>NVR-256-8-CTS</td>

                                {{-- Product Name --}}
                                <td>SATATYA NVR25608XCTS</td>

                                {{-- Product Category --}}
                                <td>NVR</td>

                                {{-- Buying Price --}}
                                <td>
                                    {{number_format(1000000)}}
                                </td>

                                {{-- Margin Gategory --}}
                                <td>
                                    <div class="badge bg-primary">
                                        Percent
                                    </div>
                                </td>

                                {{-- Margin Value --}}
                                <td>10 %</td>

                                <td>{{number_format(1100000)}}</td>
                                <td>
                                    <a href="price-buying-edit">
                                        <button type="button" class="btn btn-primary btn-sm">Set selling price</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                {{-- ID --}}
                                <td>2</td>
                                {{-- Product Image --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="User Image" src="assets/img/product/matrix-nvr.jpg">
                                    </div>
                                </td>
                                {{-- SKU Code --}}
                                <td>NVR-256-8-CTS</td>

                                {{-- Product Name --}}
                                <td>SATATYA NVR25608XCTS</td>

                                {{-- Product Category --}}
                                <td>NVR</td>

                                {{-- Buying Price --}}
                                <td>
                                    {{number_format(1000000)}}
                                </td>

                                {{-- Margin Gategory --}}
                                <td>
                                    <div class="badge bg-primary">
                                        Nominal
                                    </div>
                                </td>

                                {{-- Margin Value --}}
                                <td>{{number_format(100000)}}</td>

                                <td>{{number_format(1100000)}}</td>
                                <td>
                                    <a href="price-buying-edit">
                                        <button type="button" class="btn btn-primary btn-sm">Set selling price</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                {{-- ID --}}
                                <td>3</td>
                                {{-- Product Image --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="User Image" src="assets/img/product/matrix-nvr.jpg">
                                    </div>
                                </td>
                                {{-- SKU Code --}}
                                <td>NVR-256-8-CTS</td>

                                {{-- Product Name --}}
                                <td>SATATYA NVR25608XCTS</td>

                                {{-- Product Category --}}
                                <td>NVR</td>

                                {{-- Buying Price --}}
                                <td>
                                    {{number_format(1000000)}}
                                </td>

                                {{-- Margin Gategory --}}
                                <td>
                                    <div class="badge bg-primary">
                                        Selling Price
                                    </div>
                                </td>

                                {{-- Margin Value --}}
                                <td>{{number_format(1100000)}}</td>

                                <td>{{number_format(1100000)}}</td>
                                <td>
                                    <a href="price-buying-edit">
                                        <button type="button" class="btn btn-primary btn-sm">Set selling price</button>
                                    </a>
                                </td>
                            </tr>
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
