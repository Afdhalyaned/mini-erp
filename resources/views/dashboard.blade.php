@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-xl-4 col-sm-4 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span
                        class="dash-widget-icon bg-primary"
                    >
                        <i class="fe fe-users"></i>
                    </span>
                    <div class="dash-count">
                        <a href="#" class="count-title"
                            >Total Lead</a
                        >
                        <a href="#" class="count">
                            10,320</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-4 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span
                        class="dash-widget-icon bg-warning"
                    >
                        <i class="fe fe-phone"></i>
                    </span>
                    <div class="dash-count">
                        <a href="#" class="count-title"
                            >Proposal sent</a
                        >
                        <a href="#" class="count">
                            1,628</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-4 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span
                        class="dash-widget-icon bg-danger"
                    >
                        <i class="fe fe-comments"></i>
                    </span>
                    <div class="dash-count">
                        <a href="#" class="count-title"
                            >Project Deal</a
                        >
                        <a href="#" class="count"> 98</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h4 class="card-title float-start">
                    Best Selling Product
                </h4>
                <div class="table-search float-end">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                    />
                    <button class="btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive no-radius">
                    <table class="table table-hover table-center" >
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th>Product Name</th>
                                <th class="text-center">
                                    Product Category
                                </th>
                                <th class="text-center">
                                    Total Sales
                                </th>
                                <th class="text-end">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap">
                                    <div class="font-weight-600" >
                                        #1
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    SATATYA CIBR80FL28CWS
                                </td>
                                <td class="text-center">
                                    <div class="badge bg-primary">IP Camera</div>
                                </td>
                                <td class="text-center">
                                    934
                                </td>
                                <td class="text-end">
                                    <a href="#">detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div class="font-weight-600" >
                                        #2
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    SATATYA CIBR80FL28CWS
                                </td>
                                <td class="text-center">
                                    <div class="badge bg-primary">IP Camera</div>
                                </td>
                                <td class="text-center">
                                    934
                                </td>
                                <td class="text-end">
                                    <a href="#">detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div class="font-weight-600" >
                                        #3
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    SATATYA CIBR80FL28CWS
                                </td>
                                <td class="text-center">
                                    <div class="badge bg-primary">IP Camera</div>
                                </td>
                                <td class="text-center">
                                    934
                                </td>
                                <td class="text-end">
                                    <a href="#">detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div class="font-weight-600" >
                                        #4
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    SATATYA CIBR80FL28CWS
                                </td>
                                <td class="text-center">
                                    <div class="badge bg-primary">IP Camera</div>
                                </td>
                                <td class="text-center">
                                    934
                                </td>
                                <td class="text-end">
                                    <a href="#">detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection