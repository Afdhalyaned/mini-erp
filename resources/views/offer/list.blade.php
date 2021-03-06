@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-10">
            <h3 class="page-title">Offer List</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Offer List
                </li>
            </ul>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProduct">Create new Offering</button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="datatable table table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Ref Code</th>
                                <th>Client Name</th>
                                <th>Company</th>
                                <th>Project Name</th>
                                <th>Project Value</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- no --}}
                                <td>1</td>
                                
                                {{-- Date --}}
                                <td>2022-04-30</td>

                                {{-- ref code --}}
                                <td>004/ABC/OFFERING/I/2022</td>

                                {{-- client name --}}
                                <td>Hartono</td>

                                {{-- client company --}}
                                <td>PT Hartono Peduli Lindungi</td>

                                {{-- Project Name --}}
                                <td>Instalasi CCTV kawasan A</td>

                                {{-- Project Value --}}
                                <td>Rp {{number_format(100000000, 2)}}</td>

                                {{-- project category --}}
                                <td><div class="badge bg-primary">CCTV</div></td>

                                <td>
                                    <a href="/offer-detail">
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

