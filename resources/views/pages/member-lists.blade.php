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
                            <li class="breadcrumb-item"><a href="#">Keanggotaan</a></li>
                            <li class="breadcrumb-item active">List Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->

            <div class=" container-fluid container-fixed-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <div class="card-header  ">
                                <div class="card-title">
                                    Filter Keanggotaan
                                </div>
                            </div>
                            <div class="card-block">
                                <!-- <h3><span class="semi-bold">Linear</span> Progress</h3> -->
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-block">
                                            <form id="" class="form-horizontal" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">ID Koperasi</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="name" placeholder="ID Koperasi"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Nama Anggota</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="name" placeholder="Nama Anggota"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Status</label>
                                                    <div class="col-md-8">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">Approved</option>
                                                            <option value="HI">Rejected</option>
                                                            <option value="HI">Waiting</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>   
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-block">
                                            <form id="" class="form-horizontal" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label for="fdatebirth" class="col-md-3">Tanggal Pengajuan</label>
                                                    <div class="col-md-8">
                                                        <div id="datepicker-component" class="input-group date p-l-0">
                                                            <input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Nomer KTP</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="name" placeholder="Nomer KTP"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Alamat Email</label>
                                                    <div class="col-md-8">
                                                        <input class="form-control" id="name" placeholder="Alamat Email"/>
                                                    </div>
                                                </div>
                                            </form>  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-cons m-b-10" type="button">
                                            <i class="pg-form"></i> 
                                            <span class="bold">Submit</span>
                                        </button>
                                        <button class="btn btn-complete btn-cons m-b-10" type="button">
                                            <i class="pg-form"></i> 
                                            <span class="bold">Clear</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="card-linear-color" class="card card-default">
                            <!-- <div class="card-block"> -->
                                <!-- <div class="table-responsive"> -->
                                    <table class="table " id="tableWithExportOptions">
                                        <thead>
                                            <tr>
                                                <th style="width:12">No</th>
                                                <th style="width:50">Action</th>
                                                <th style="width:100%">ID Koperasi</th>
                                                <th style="width:100">Nama</th>
                                                <th style="width:100">Nomer KTP</th>
                                                <th style="width:100">Alamat Email</th>
                                                <th style="width:50">Tanggal Pengajuan</th>
                                                <th style="width:50">ID Karyawan</th>
                                                <th style="width:20">Status Karyawan</th>
                                                <th style="width:100">Jabatan</th>
                                                <th style="width:150">Nama Perusahaan</th>
                                                <th style="width:50">Status Keangotaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>1</td>
                                                <td>Edit</td>
                                                <td style="width:100">4444009999</td>
                                                <td class="center"> Ridwan Remin</td>
                                                <td class="center">310931233339887430008</td>
                                                <td>ridwan.remin@gmail.com</td>
                                                <td>10/10/2019</td>
                                                <td>44077</td>
                                                <td class="center">TETAP</td>
                                                <td class="center">Cleaning Services</td>
                                                <td class="center"> PT. SUDAH TIDAK UNTUNG</td>
                                                <td class="center">waiting</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        @include('includes.footer-content')
    </div>
@stop