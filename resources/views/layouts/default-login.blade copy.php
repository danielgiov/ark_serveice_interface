<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="">
        <!-- BEGIN SIDEBPANEL-->
        
        <!-- END SIDEBAR -->
        <!-- END SIDEBPANEL-->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container ">
               
            <!-- START PAGE CONTENT WRAPPER -->
                @yield('content')
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>