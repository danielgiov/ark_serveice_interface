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
                            <li class="breadcrumb-item active">Subscription Management</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->
            <div class=" container-fluid container-fixed-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <form method="post" action="{{ route('sml') }}" class="form-horizontal" role="form" autocomplete="off">
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
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="">-- Type Koperasi--</option>
                                                            <option value="">A</option>
                                                            <option value="">B</option>
                                                        </select>
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
                                                <button class="btn btn-primary btn-cons m-b-10" type="submit">
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
                                                <th style="width:12%">Nama Holding</th>
                                                <th style="width:12%">PIC Name</th>
                                                <th style="width:12%">Nama Email</th>
                                                <th style="width:12%">Start Date</th>
                                                <th style="width:12%">End Date</th>
                                                <th style="width:12%">Decription</th>
                                                <th style="width:10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>SUB-001</td>
                                                <td>Koperasi Pertamina</td>
                                                <td>Ridwan</td>
                                                <td>Ridwan@mail.com</td>
                                                <td>2019/01/01</td>
                                                <td>2019/01/01</td>
                                                <td>bla bla</td>
                                                <td><a href="{{ url('/subscription-management-detail') }}"><i class="fa fa-eye" title="View"></i></a></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>SUB-002</td>
                                                <td>Koperasi Telkom</td>
                                                <td>Mekel</td>
                                                <td>Mekel@mail.com</td>
                                                <td>2019/01/01</td>
                                                <td>2019/01/01</td>
                                                <td>bla bla</td>
                                                <td><a href="{{ url('/subscription-management-detail') }}"><i class="fa fa-eye" title="View"></i></a></td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>SUB-003</td>
                                                <td>Koperasi Pertamina</td>
                                                <td>Bambang</td>
                                                <td>Bambang@mail.com</td>
                                                <td>2019/01/01</td>
                                                <td>2019/01/01</td>
                                                <td>bla bla</td>
                                                <td><a href="{{ url('/subscription-management-detail') }}"><i class="fa fa-eye" title="View"></i></a></td>
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