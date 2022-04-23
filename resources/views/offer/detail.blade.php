@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h3 class="page-title">Offer Detail</h3>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/offer">Offer</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col">
        <h5>General Info</h5>
    </div>
    <div class="col text-end">
        <button type="button" class="btn btn-primary me-3">Export PDF</button>
    </div>
</div>

<div class="row">
    <div class="col-sm">
        {{-- no --}}
        <div class="mb-3">
            <span><strong>ID</strong></span><br>
            <span>004</span>
        </div>

        {{-- Date --}}
        <div class="mb-3">
            <span><strong>Date</strong></span><br>
            <span>2022-04-30</span>
        </div>
    </div>
    <div class="col-sm">
        {{-- Ref Code --}}
        <div class="mb-3">
            <span><strong>Ref code</strong></span><br>
            <span>004/ABC/OFFERING/I/2022</span>
        </div>

        {{-- client Name --}}
        <div class="mb-3">
            <span><strong>Client Name</strong></span><br>
            <span>Hartono</span>
        </div>
    </div>
    <div class="col-sm">
        {{-- client company --}}
        <div class="mb-3">
            <span><strong>Company</strong></span><br>
            <span>PT Hartono Peduli Lindungi</span>
        </div>

        {{-- Project Name --}}
        <div class="mb-3">
            <span><strong>Project Name</strong></span><br>
            <span>Instalasi CCTV kawasan A</span>
        </div>
    </div>
    <div class="col-sm">
        {{-- Project Value --}}
        <div class="mb-3">
            <span><strong>Project Value</strong></span><br>
            <span>Rp {{number_format(100000000)}}</span>
        </div>
    </div>
</div>
<hr>
<div class="row">
    {{-- pricing --}}
    <div class="col">
        <h5 class="mb-3">Pricing</h5>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Description</td>
                            <td>Quantity</td>
                            <td>Unit Price </td>
                            <td>Unit</td>
                            <td><strong>Price</strong></td>
                            <td>action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>IP Cam</td>
                            <td>100</td>
                            <td>unit</td>
                            <td class="text-end">{{number_format(1000000)}}</td>
                            <td class="text-end"><strong>{{number_format(100000000)}}</strong></td>
                            <td><a href="">edit</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>NVR</td>
                            <td>20</td>
                            <td>unit</td>
                            <td class="text-end">{{number_format(5000000)}}</td>
                            <td class="text-end"><strong>{{number_format(10000000)}}</strong></td>
                            <td><a href="">edit</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>UTP Cable</td>
                            <td>10</td>
                            <td>roll</td>
                            <td class="text-end">{{number_format(5000000)}}</td>
                            <td class="text-end"><strong>{{number_format(5000000)}}</strong></td>
                            <td><a href="">edit</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Installation fee</td>
                            <td>1</td>
                            <td>lot</td>
                            <td class="text-end">{{number_format(30000000)}}</td>
                            <td class="text-end"><strong>{{number_format(30000000)}}</strong></td>
                            <td><a href="">edit</a></td>
                        </tr>
                        <tr>
                            <td colspan="5">Total</td>
                            <td class="text-end">{{number_format(145000000)}}</td>
                        </tr>
                        <tr>
                            <td colspan="5">PPN 11%</td>
                            <td class="text-end">{{number_format(15000000)}}</td>
                        </tr>
                        <tr>
                            <td colspan="5">Total After PPN</td>
                            <td class="text-end"><strong>{{number_format(160000000)}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- term and condition --}}
    <div class="col">
        <h5 class="mb-3">Term and Condition</h5>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Currency</td>
                        <td>IDR</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Warranty</td>
                        <td>2 Years</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>FOB Jakarta</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td> Ready, If Prdouct Indent 10 -14 Weeks ARO</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Shipment</td>
                        <td>Wait confirmation to Harrisma Maximum 30 days Before Delivery Times On Site</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>Validity</td>
                        <td>1 Weeks</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                    <tr>
                        <td>TOP</td>
                        <td>Bank Transfer Before Delivery</td>
                        <td><a href="#">edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<hr>
<h5>Product Spesification</h5>
<div class="row">
    <div class="col-md-6">
        {{-- card --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/img/product/ip-cam.png" class="img-thumbnail" alt="ip cam">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">IP Camera</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, sed illo fuga nisi voluptatibus blanditiis corporis accusamus in minus recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa, necessitatibus accusamus quod nobis minus eveniet eos quia ipsum eligendi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {{-- card --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/img/product/nvr.jpg" class="img-thumbnail" alt="nvr">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">NVR</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, sed illo fuga nisi voluptatibus blanditiis corporis accusamus in minus recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa, necessitatibus accusamus quod nobis minus eveniet eos quia ipsum eligendi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {{-- card --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/img/product/cable.jpg" class="img-thumbnail" alt="nvr">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">UTP Cable</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, sed illo fuga nisi voluptatibus blanditiis corporis accusamus in minus recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa, necessitatibus accusamus quod nobis minus eveniet eos quia ipsum eligendi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        {{-- card --}}
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/assets/img/product/installation.jpg" class="img-thumbnail" alt="nvr">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">Installation</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, sed illo fuga nisi voluptatibus blanditiis corporis accusamus in minus recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea culpa, necessitatibus accusamus quod nobis minus eveniet eos quia ipsum eligendi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection