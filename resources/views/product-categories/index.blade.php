@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-10">
            <h3 class="page-title">Product Categories</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Product Categories
                </li>
            </ul>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategory">Add Category</button>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productCategories as $productCategory)
                            <tr>
                                {{-- category id --}}
                                <td>{{ $productCategory->id }}</td>
                                {{-- category name --}}
                                <td>{{ $productCategory->name }}</td>
                                {{-- action --}}
                                <td>
                                    {{-- detail --}}
                                    <a href="{{ route('product-categories.show', $productCategory) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                    </a>
                                    {{-- delete --}}
                                    <form action="{{ route('product-categories.destroy', $productCategory)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" onclick="return confirm('are you sure wanna delete this category?')" class="btn btn-sm btn-danger">delete</button>
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
<div class="modal fade" id="newCategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form --}}
          <form action="{{ route('product-categories.store') }}" method="post" enctype="multipart/form-data">
            {{-- category name --}}
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" name="name">
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

