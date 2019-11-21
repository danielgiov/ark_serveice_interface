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
                            <li class="breadcrumb-item active">Pendaftaran Anggota</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END JUMBOTRON -->
            <div class=" container-fluid container-fixed-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-borderless">
                            <ul class="nav nav-tabs nav-tabs-simple" role="tablist" data-init-reponsive-tabs="dropdownfx">
                                <li class="nav-item">
                                    <a class="active" data-toggle="tab" role="tab" data-target="#tab2selfdata" href="#">Data Pribadi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" data-toggle="tab" role="tab" data-target="#tab2addressdata">Data Alamat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" data-toggle="tab" role="tab" data-target="#tab2employeedata">Data Karyawan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" data-toggle="tab" role="tab" data-target="#tab2familydata">Data Keluarga</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab2selfdata">
                                    <div class="row column-seperation">
                                        <div class="col-md-8">
                                            <div class="card-block">
                                                <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Id Koperasi</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="ID Koperasi" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Jenis Kartu Identitas</label>
                                                        <div class="col-md-4">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">KTP</option>
                                                                <option value="HI">NPWP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnumberidentitas" class="col-md-3">No Identitas</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnumberidentitas" placeholder="ID Koperasi" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnameidentity" class="col-md-3">Nama Sesuai Identitas</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnameidentity" placeholder="Nama Sesuai Identitas" name="nama_anggota" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fplacebirth" class="col-md-3">Tempat Lahir</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fplacebirth" placeholder="Tempat Lahir" name="place_birth" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fdatebirth" class="col-md-3">Tanggal Lahir</label>
                                                        <div class="col-md-4">
                                                            <div id="datepicker-component" class="input-group date p-l-0">
                                                                <input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">Jenis Kelamain</label>
                                                        <div class="col-md-9">
                                                        <div class="radio radio-success">
                                                            <input type="radio" value="male" name="optionyes" id="male">
                                                            <label for="male">Pria</label>
                                                            <input type="radio" checked="checked" value="female" name="optionyes" id="female">
                                                            <label for="female">Wanita</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">Status Perkawinan</label>
                                                        <div class="col-md-9">
                                                        <div class="radio radio-success">
                                                            <input type="radio" value="maried" name="optionyes" id="maried">
                                                            <label for="maried">Menikah</label>
                                                            <input type="radio" checked="checked" value="single" name="optionyes" id="single">
                                                            <label for="single">Belum Menikah</label>
                                                            <input type="radio" checked="" value="widower" name="optionyes" id="widower">
                                                            <label for="widower">Duda</label>
                                                            <input type="radio" checked="" value="widow" name="optionyes" id="widow">
                                                            <label for="widow">Janda</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fdatevalididentity" class="col-md-3">Valid Date Identity</label>
                                                        <div class="col-md-4">
                                                            <div id="datepicker-component" class="input-group date p-l-0">
                                                                <input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">Warga Negara</label>
                                                        <div class="col-md-9">
                                                        <div class="radio radio-success">
                                                            <input type="radio" value="wni" name="optionyes" id="wni">
                                                            <label for="male">WNI</label>
                                                            <input type="radio" checked="checked" value="wna" name="optionyes" id="wna">
                                                            <label for="wna">WNA</label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Negara</label>
                                                        <div class="col-md-4">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">Indonesia</option>
                                                                <option value="HI">Singapura</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Pendidikan Terakhir</label>
                                                        <div class="col-md-4">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">S1</option>
                                                                <option value="HI">S2</option>
                                                                <option value="HI">S3</option>
                                                                <option value="HI">SLTA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnonpwp" class="col-md-3">No NPWP</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnonpwp" placeholder="No NPWP" name="npwp_number" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Jumlah Tanggungan</label>
                                                        <div class="col-md-4">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">1</option>
                                                                <option value="HI">2</option>
                                                                <option value="HI">3</option>
                                                                <option value="HI">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnonpwp" class="col-md-3">No Handphone</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnonpwp" placeholder="No Handphone" name="npwp_number" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnonpwp" class="col-md-3">No Telepon</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnonpwp" placeholder="No Telepon" name="npwp_number" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fnonpwp" class="col-md-3">Alamat Email</label>
                                                        <div class="col-md-4">
                                                            <input type="text" class="form-control" id="fnonpwp" placeholder="Alamat Email" name="npwp_number" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="form-group row">
                                                        <label class="col-md-3 control-label">Work</label>
                                                        <div class="col-md-9">
                                                        <p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>
                                                        <p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                            <input type="text" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-5 sm-m-t-10">
                                                            <input type="text" placeholder="Code/Number" class="form-control">
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="position" class="col-md-3 control-label">Position applying for</label>
                                                        <div class="col-md-9">
                                                        <input type="text" class="form-control" id="position" placeholder="Designation" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-3 control-label">Description</label>
                                                        <div class="col-md-9">
                                                        <textarea class="form-control" id="name" placeholder="Briefly Describe your Abilities"></textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                        <p>I hereby certify that the information above is true and accurate. </p>
                                                        </div>
                                                        <div class="col-md-9">
                                                        <button class="btn btn-success" type="submit">Submit</button>
                                                        <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                                                        </div>
                                                    </div> -->
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-block">
                                                <!-- <h1>Image</h1> -->
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="tab2addressdata">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card-block">
                                                <h3>Alamat Sesuai KTP</h3>
                                                <form id="form-address01" class="form-horizontal" role="form" autocomplete="off">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-3">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="name" placeholder="Alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">RT / RW</label>
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="RT" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="RW" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kelurahan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kelurahan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Kabupaten</label>
                                                        <div class="col-md-9">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">Ciracas</option>
                                                                <option value="HI">Rambutan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Negara</label>
                                                        <div class="col-md-9">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">Indonesia</option>
                                                                <option value="HI">Singapura</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>    
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card-block">
                                                <h3>Alamat Tempat Tinggal</h3>
                                                <form id="form-address02" class="form-horizontal" role="form" autocomplete="off">
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-3">Alamat</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="name" placeholder="Alamat"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">RT / RW</label>
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="RT" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="RW" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kelurahan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kelurahan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Kabupaten</label>
                                                        <div class="col-md-9">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">Ciracas</option>
                                                                <option value="HI">Rambutan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="fidentitycardtype" class="col-md-3">Negara</label>
                                                        <div class="col-md-9">
                                                            <select class="full-width" data-init-plugin="select2">
                                                                <option value="AK">Indonesia</option>
                                                                <option value="HI">Singapura</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2employeedata">
                                    <div class="row">
                                        <div class="card-block">
                                            <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Nama Perusahaan</label>
                                                    <div class="col-md-4">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">PT. Cipta Anugerah</option>
                                                            <option value="HI">PT. Bintang Di Langit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Jabatan</label>
                                                    <div class="col-md-4">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">Supervisor</option>
                                                            <option value="HI">Manager</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Golongan</label>
                                                    <div class="col-md-4">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">I</option>
                                                            <option value="HI">II</option>
                                                            <option value="HI">III</option>
                                                            <option value="HI">IV</option>
                                                            <option value="HI">V</option>
                                                            <option value="HI">VI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fdatebirth" class="col-md-3">Tanggal Karyawan Tetap</label>
                                                    <div class="col-md-4">
                                                        <div id="datepicker-component" class="input-group date p-l-0">
                                                            <input type="text" class="form-control"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Id Karyawan</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="ID Karyawan" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Gaji</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Gaji" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-3">Alamat Perusahaan</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" id="name" placeholder="Alamat Perusahaan"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3">RT / RW</label>
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="RT" class="form-control" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" placeholder="RW" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Kelurahan</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Kelurahan" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Kabupaten</label>
                                                    <div class="col-md-4">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">Ciracas</option>
                                                            <option value="HI">Rambutan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Kecamatan</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Kecamatan" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidentitycardtype" class="col-md-3">Negara</label>
                                                    <div class="col-md-4">
                                                        <select class="full-width" data-init-plugin="select2">
                                                            <option value="AK">Indonesia</option>
                                                            <option value="HI">Singapura</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2familydata">
                                    <div class="row">
                                        <div class="card-block">
                                            <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Nama Gadis Ibu Kandung</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Nama Ibu Kandung" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fidkoperasi" class="col-md-3">Nama Jejaka Ayah Kandung</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" id="fidkoperasi" placeholder="Nama Jejaka Ayah" name="id_koperasi" required>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        @include('includes.footer-content')
    </div>
@stop