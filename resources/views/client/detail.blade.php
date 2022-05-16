@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Client Name : <strong>{{ $client->name }}</strong></h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('clients.index') }}">
                        Clients
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    {{ $client->name }}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4>General Info</h4>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <img src="{{ asset('storage/client/'.$client->logo) }}" class="img-thumbnail" alt="...">
                </div>
                <div class="col-sm-9">
                    <div class="table-responsive">
                        <table class="table table mb-0">
                            <tbody>
                                <tr>
                                    <td><strong>ID</strong></td>
                                    <td>{{ $client->id }}</td>
                                </tr>
                                <tr> 
                                    <td><strong>Name</strong></td>
                                    <td>{{ $client->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Legal Name</strong></td>
                                    <td>{{ $client->legal_name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- edit button --}}
        <div class="d-grid gap-2 mx-auto mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editClient">Edit</button>
        </div>
        <h4>PIC</h4>
        <div class="card-info">
            <div class="row">
                @foreach($client->pic->where('is_deleted', false) as $pic)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pic->name }}</h5>
                            <span>{{ $pic->role }}</span><br>
                            <span>{{ $pic->phone }}</span><br>
                            <span>{{ $pic->email }}</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('client-pic.edit', $pic->id) }}">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-warning" >Edit</button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('client-pic.destroy', $pic->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="d-grid gap-2">
                                        <button type="submit" onclick="return confirm('Are you sure wanna delete this record?')" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addPic">Add new PIC</button>
            </div>
        </div>
        
    </div>
    <div class="col">
        <h4>Address</h4>
        <div class="card-body">
            @foreach($client->address->where('is_deleted',false) as $address)
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $address->name }}</h5>
                    <p class="card-text">{{ $address->detail ." ". $address->village ." ". $address->urban_village ." ". $address->distric ." ". $address->province}}</p>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ $address->map_url }}" target="_blank">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" >Map</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('client-addresses.edit', $address) }}">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-warning" >Edit</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('client-addresses.destroy', $address) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="d-grid gap-2">
                                    <button type="submit" onclick="return confirm('Are you sure wanna delete this record?')" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-grid gap-2">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#addAddress">Add new address</button>
            </div>
        </div>
    </div>
</div>

{{-- modal edit general info --}}
<div class="modal fade" id="editClient" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Client Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- form --}}
                <form action="{{ route('clients.update', $client) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    {{-- Client name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Client Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                    </div>
                    {{-- Client Legal Name --}}
                    <div class="mb-3">
                        <label for="legal_name" class="form-label">Client Legal Name</label>
                        <input type="text" class="form-control" name="legal_name" value="{{ $client->legal_name }}">
                    </div>
                    {{-- company logo --}}
                    <div class="mb-3">
                        <label for="logo" class="form-label">Update Logo</label>
                        <input class="form-control" type="file" name="logo">
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

{{-- modal add new PIC --}}
<div class="modal fade" id="addPic" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">add PIC for <strong>{{ $client->name }}</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- form --}}
                <form action="{{ route('client-pic.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Client --}}
                    <div class="mb-3">
                        <label for="client_id" class="form-label">Client Name</label>
                        <select name="client_id" id="client_id" class="form-select" readonly="readonly">
                            <option value="{{ $client->id }}" selected>{{ $client->name }}</option>
                        </select>
                    </div>
                    {{-- PIC name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    {{-- PIC role --}}
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" name="role">
                    </div>
                    {{-- PIC Gender --}}
                    <div class="mb-3">
                        <label for="role" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value=""><< Select Gender >></option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    {{-- phone number --}}
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
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

{{-- modal add Location --}}
<div class="modal fade" id="addAddress" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">add Address for <strong>{{ $client->name }}</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- form --}}
                <form action="{{ route('client-addresses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Client --}}
                    <div class="mb-3">
                        <label for="client_id" class="form-label">Client Name</label>
                        <select name="client_id" id="client_id" class="form-select" readonly="readonly">
                            <option value="{{ $client->id }}" selected>{{ $client->name }}</option>
                        </select>
                    </div>
                    {{-- address name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Address Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    {{-- Address Detail --}}
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail">
                    </div>
                    {{-- province --}}
                    <div class="mb-3">
                        <label for="province" class="form-label">Province</label>
                        <input type="text" class="form-control" name="province">
                    </div>
                    {{-- distric --}}
                    <div class="mb-3">
                        <label for="distric" class="form-label">Distric</label>
                        <input type="text" class="form-control" name="distric">
                    </div>
                    {{-- Urban Village --}}
                    <div class="mb-3">
                        <label for="urban_village" class="form-label">Urban Village</label>
                        <input type="text" class="form-control" name="urban_village">
                    </div>
                    {{-- village --}}
                    <div class="mb-3">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" class="form-control" name="village">
                    </div>
                    {{-- Postal code --}}
                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code">
                    </div>
                    {{-- Map Url --}}
                    <div class="mb-3">
                        <label for="map_url" class="form-label">Map Url</label>
                        <input type="text" class="form-control" name="map_url">
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