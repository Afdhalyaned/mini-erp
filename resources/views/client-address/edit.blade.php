@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Edit Company Addess</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('client.index') }}">{{ $pic->client->name }}</a> 
                </li>
                <li class="breadcrumb-item active">
                    PIC
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('client-pic.update', $pic )  }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            {{-- name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $pic->name }}">
            </div>

            {{-- role --}}
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" name="role" value="{{ $pic->role }}">
            </div>

            {{-- phone --}}
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $pic->phone }}">
            </div>

            {{-- email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $pic->email }}">
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