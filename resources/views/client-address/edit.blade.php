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
                    <a href="{{ route('clients.index') }}">{{ $address->client->name }}</a> 
                </li>
                <li class="breadcrumb-item active">
                    Address
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('client-addresses.update', $address )  }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            {{-- address name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Address Name</label>
                <input type="text" class="form-control" name="name" value="{{ $address->name }}" required>
            </div>
            {{-- Address Detail --}}
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input type="text" class="form-control" name="detail" value="{{ $address->detail }}">
            </div>
            {{-- province --}}
            <div class="mb-3">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control" name="province" value="{{ $address->province }}">
            </div>
            {{-- distric --}}
            <div class="mb-3">
                <label for="distric" class="form-label">Distric</label>
                <input type="text" class="form-control" name="distric" value="{{ $address->distric }}">
            </div>
            {{-- Urban Village --}}
            <div class="mb-3">
                <label for="urban_village" class="form-label">Urban Village</label>
                <input type="text" class="form-control" name="urban_village" value="{{ $address->urban_village }}">
            </div>
            {{-- village --}}
            <div class="mb-3">
                <label for="village" class="form-label">Village</label>
                <input type="text" class="form-control" name="village" value="{{ $address->village }}">
            </div>
            {{-- Postal code --}}
            <div class="mb-3">
                <label for="postal_code" class="form-label">Postal Code</label>
                <input type="text" class="form-control" name="postal_code" value="{{ $address->postal_code }}">
            </div>
            {{-- Map Url --}}
            <div class="mb-3">
                <label for="map_url" class="form-label">Map Url</label>
                <input type="text" class="form-control" name="map_url" value="{{ $address->map_url }}">
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