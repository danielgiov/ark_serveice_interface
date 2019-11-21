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
                            <li class="breadcrumb-item"><a href="#">Transaksi Pinjaman</a></li>
                            <!-- <li class="breadcrumb-item active">Pendaftaran Anggota</li> -->
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->
        </div>
        <!-- END PAGE CONTENT -->
        @include('includes.footer-content')
    </div>
@stop