@extends('layouts.master')

@section('plugin')
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css" />
@endsection

@section('content')

<div class="page-header">
    <div class="row">
        <div class="col-sm-10">
            <h3 class="page-title">List Client</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Clients
                </li>
            </ul>
        </div>
        <div class="col-sm-2 text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newClient">Add Client</button>
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
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Legal Name</th>
                                <th>PIC</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                {{-- ID --}}
                                <td>{{ $client->id }}</td>
                                {{-- Logo --}}
                                <td>
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="Client Logo" src="{{ asset('storage/client/'.$client->logo) }}">
                                    </div>
                                </td>
                                {{-- client name --}}
                                <td>{{ $client->name }}</td>
                                {{-- client legal name --}}
                                <td>{{ $client->legal_name }}</td>
                                {{-- PIC --}}
                                <td></td>
                                {{-- Addess --}}
                                <td></td>
                                <td>
                                    {{-- detail --}}
                                    <a href="{{ route('clients.show', $client) }}">
                                        <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                    </a>
                                    {{-- delete --}}
                                    <form action="{{ route('products.destroy', $client->id) }}" method="POST" style="display:inline-block">
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
<div class="modal fade" id="newClient" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form --}}
          <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Client name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Client Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            {{-- Client Legal Name --}}
            <div class="mb-3">
                <label for="legal_name" class="form-label">Client Legal Name</label>
                <input type="text" class="form-control" name="legal_name">
            </div>
            {{-- company logo --}}
            <div class="mb-3">
                <label for="logo" class="form-label">Client Logo</label>
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
@endsection

@section('script')

@endsection

