@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <h4>Product Detail</h4>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table mb-0">
                    <tbody>
                        <tr>
                            <td><strong>Product Name</strong></td>
                            <td>SATATYA NVR25608XCTS</td>
                        </tr>
                        <tr>
                            <td><strong>Product Category</strong></td>
                            <td>
                                <div class="badge bg-primary">
                                    NVR
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SKU Code</strong></td>
                            <td>Matrix-NVR-256-08-CTS</td>
                        </tr>
                        <tr>
                            <td><strong>Product Description</strong></td>
                            <td><p>256 Channel Enterprise Range Server Grade NVR with 4K Support and 8HDD Slots 
                                • 256 IP Channel Inputs; Display: 1 x VGA and 2 x Display Port 
                                • Dual Input Hot Swap Redundant (1+1) Power Supply 
                                • 8 Hot Swap 3 5"/2 5" SATA HDD/SSD Drive Bay (18TB Capacity, Hard Disk Not Included) 
                                • 4x 1 GbE Lan port ; 512 Mbps Uplink & 512 Mbps Downlink 
                                • Onvif & Major Brand Camera Support with 12MP, 8MP, 5MP,3MP, 2MP, 1080P, D1 & CIF Recording 
                                • 1 x 4k/4 x 1080P/12 x 720P/16 x D1 Local Decoding 
                                • Remote and Centralized Viewing and Management and Mobile Clients 
                                • Multi-stream Support, Real Time Notification using SMS & Email</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="image">
            <img src="assets/img/product/matrix-nvr.jpg" alt="">
        </div>
    </div>
</div>
<div class="row text-right">
    <div class="col-sm-6 text-right">
        <a href="product-edit">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </a>
    </div>
</div>
@endsection