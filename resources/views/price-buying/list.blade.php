@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Buying Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Buying Price
                </li>
            </ul>
        </div>
    </div>
</div>
<hr>
<h4 class="mb-3">Update Product Price</h4>
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-6">
         {{-- product name --}}
         <div class="mb-3">
            <label for="product-name" class="form-label">Product Name</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Product</option>
                <option value="1">NVR-256-8-CTS SATATYA NVR25608XCTS</option>
                <option value="1">NVR-256-8-CTS SATATYA NVR25608XCTS</option>
                <option value="1">NVR-256-8-CTS SATATYA NVR25608XCTS</option>
                <option value="1">NVR-256-8-CTS SATATYA NVR25608XCTS</option>
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        {{-- pricing date --}}
        <div class="mb-3">
            <label for="product-name" class="form-label">Date</label>
            <input type="date" class="form-control" name="product-name" value="2022-04-23" required>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        {{-- product purchase price --}}
        <div class="mb-3">
            <label for="product-name" class="form-label">New Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" ame="product-name" value="" required>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        {{-- product name --}}
         <div class="mb-3">
            <label for="product-name" class="form-label">Supplier</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Supplier</option>
                <option value="1">PT Sukses Makmur Sentosa</option>
                <option value="1">PT Sukses Makmur Sentosa</option>
                <option value="1">PT Sukses Makmur Sentosa</option>
                <option value="1">PT Sukses Makmur Sentosa</option>
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <div class="d-grid gap-2">
            <button class="btn btn-primary mt-3" type="button">Save</button>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6">
        <div class="d-grid gap-2">
            <button class="btn btn-outline-success mt-3" type="button">Import Excel</button>
        </div>
    </div>
</div>
<hr>

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
                                <th>SKU Code</th>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Buying Price</th>
                                <th>Price Update</th>
                                <th>Supplier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>NVR-256-8-CTS</td>
                                <td>SATATYA NVR25608XCTS</td>
                                <td>NVR</td>
                                <td>
                                    {{number_format(1000000)}}
                                </td>
                                <td>23-04-2022</td>
                                <td>PT. Jiwa Sosialita</td>
                                <td>
                                    <a href="price-buying-edit">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
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

