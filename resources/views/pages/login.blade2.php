<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="">
        <div class="page-container ">
            <div class="page-content-wrapper ">
                <!-- START PAGE CONTENT -->
                <div class="content md-gutter">
                    <!-- START JUMBOTRON -->
                    
                    <div class="container bd-highlight justify-content-center" style="width: 30rem;">
                        <div class="row">
                            <div class="col-lg-12">
                                <form  method="post" action="{{ route('login') }}"  class="form" role="form" >
                                    {{ csrf_field() }} 
                                    <div id="card-linear-color" class="card card-default" >
                                        <div class="card-header text-center">
                                            <div class="card-title text-center">
                                                <h1>Login<h1>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <input class="form-control" id="user_name" name="user_name" placeholder="User Name" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <input type="password" class="form-control" id="password" name="password"   placeholder="Password" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <div class="card-block">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary btn-cons m-b-10" type="submit">
                                                                <span class="bold">Login</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            <!-- END PAGE CONTENT -->
            @include('includes.footer-content')
            </div>
                <!-- END PAGE CONTENT WRAPPER -->
            <footer class="row">
                @include('includes.footer')
            </footer>
        </body>
</html>