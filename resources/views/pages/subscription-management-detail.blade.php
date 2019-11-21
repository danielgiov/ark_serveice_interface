@extends('layouts.default')
@section('content')
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
            <!-- START JUMBOTRON -->
            <div data-pages="parallax">
                <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                    <div class="inner">
                        <!-- START BREADCRUMB -->
                        <ol class="breadcrumb sm-p-b-5">
                            <li class="breadcrumb-item">Subscription Management</li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->

            <div class="container-fluid container-fixed-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <form id="" class="form-horizontal" role="form" autocomplete="off">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Subcription ID</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="subcription_id" name="subcription_id" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Nama Koperasi</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="nama_koperasi" name="nama_koperasi" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Logo Koperasi</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="logo_koperasi" name="logo_koperasi" />
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Color</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="color" name="color" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Key</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="key" name="key" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Id Android</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="id_android" name="id_android" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Id IOS</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="id_ios" name="id_ios" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">PIC Name</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="nama_pic" name="nama_pic" />
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">PIC Email</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="email_pic" name="email_pic" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">PIC Phone Number</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="phone_pic" name="phone_pic" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Start Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control datepicker" id="start_date" name="start_date" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">End Date</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control datepicker" id="end_date" name="end_date" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Subscription Type</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="subscription_type" name="subscription_type" />
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">PIC Email</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="email_pic" name="email_pic" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">PIC Phone Number</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="phone_pic" name="phone_pic" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Repo Web</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="repo_web" name="repo_web" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Repo Mobile</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="repo_mobile" name="repo_mobile" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Description</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="description" name="description" />
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Status</label>
                                                    <div class="col-md-8">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">Approved</option>
                                                            <option value="HI">Rejected</option>
                                                            <option value="HI">Waiting</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <div class="col-md-12">
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-cons m-b-10" type="button">
                                                    <i class="pg-save"></i> 
                                                    <span class="bold">Save</span>
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <form id="" class="form-horizontal" role="form" autocomplete="off">
                                <div class="card-block">
                                    <!-- <h3><span class="semi-bold">Linear</span> Progress</h3> -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="nama_koperasi" name="nama_koperasi" placeholder="Nama Koperasi"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="nama_koperasi" name="nama_koperasi" placeholder="Sub Koperasi"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="periode_subscrip" name="periode_subscrip" placeholder="Periode Subscription"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="nama_pic" name="nama_pic" placeholder="Nama PIC"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="email_pic" name="email_pic" placeholder="Email PIC"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="periode_subscrip" name="periode_subscrip" placeholder="Periode Subscription"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-block">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input class="form-control" id="type_koperasi" name="type_koperasi" placeholder="Type Koperasi"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <div class="btn-group">
                                                <button class="btn btn-danger btn-cons m-b-10" type="button">
                                                    <i class="pg-close_line"></i> 
                                                    <span class="bold">Clear Filter</span>
                                                </button>
                                                <button class="btn btn-primary btn-cons m-b-10" type="button">
                                                    <i class="pg-search"></i> 
                                                    <span class="bold">Filter</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <!-- <div class="card-block"> -->
                                <!-- <div class="table-responsive"> -->
                                    <table class="table" >
                                        <thead>
                                            <tr>
                                                <th style="width:12%">Subscription ID</th>
                                                <th style="width:12%">Amount Payment</th>
                                                <th style="width:12%">Payment Date</th>
                                                <th style="width:12%">Payment By</th>
                                                <th style="width:12%">Payment Type</th>
                                                <th style="width:12%">Billing Periode</th>
                                                <th style="width:12%">Billing Date</th>
                                                <th style="width:10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>XXX</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><a href=""><i class="fa fa-pencil" title="Edit"></i></a>&nbsp;|&nbsp;<a href=""><i class="fa fa-file-text-o" title="Invoice"></i></a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        @include('includes.footer-content')
    </div>
@stop