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
                @foreach($client->pic as $pic)
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
                                <a href="/">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-danger" href="/">Delete</button>
                                    </div>
                                </a>
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
            <div class="card text-center mb-3">
                <div class="card-body">
                  <h5 class="card-title">Head Office</h5>
                  <p class="card-text">Jl. Gatot Subroto, RT.1/RW.1, Menteng Dalam, Jakarta selatan, DKI Jakarta, Daerah Khusus Ibukota Jakarta 10210</p>
                  <a href="#" class="btn btn-primary btn-sm">Open Map</a>
                </div>
            </div>
            <div class="card text-center mb-3">
                <div class="card-body">
                  <h5 class="card-title">Site Cikarang</h5>
                  <p class="card-text">Jl. Gatot Subroto, RT.1/RW.1, Menteng Dalam, Jakarta selatan, DKI Jakarta, Daerah Khusus Ibukota Jakarta 10210</p>
                  <a href="#" class="btn btn-primary btn-sm">Open Map</a>
                </div>
            </div>
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
          <form action="{{ route('clients.update', $client) }}" method="post" enctype="multipart/form-data">
            @csrf
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
          <form action="{{ route('clients.update', $client) }}" method="post" enctype="multipart/form-data">
            @csrf
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
@endsection