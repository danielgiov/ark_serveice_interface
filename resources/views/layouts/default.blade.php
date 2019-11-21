<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="fixed-header dashboard menu-pin">
        <!-- BEGIN SIDEBPANEL-->
        <nav class="page-sidebar" data-pages="sidebar">
            <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
            <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
            <!-- BEGIN SIDEBAR MENU HEADER-->
            <div class="sidebar-header">
                <img src="../../assets/img/logo.png" alt="logo" class="brand" data-src="../../assets/img/logo.png" data-src-retina="../../assets/img/logo_2x.png" width="78" height="22">
            </div>
            <!-- END SIDEBAR MENU HEADER-->
            <!-- START SIDEBAR MENU -->
            <div class="sidebar-menu">
                <!-- BEGIN SIDEBAR MENU ITEMS-->
                <ul class="menu-items">
                    <li class="m-t-30 ">
                        <a href="{{ url('/') }}" class="detailed">
                            <span class="title">Dashboard</span>
                        </a>
                        <span class="icon-thumbnail"><i data-feather="shield"></i></span>
                    </li>
                    
                    <li class="m-t-30 ">
                        <a href="{{ url('/subscription-management-list') }}" class="detailed">
                            <span class="title">Subscription Management</span>
                        </a>
                        <span class="icon-thumbnail"><i data-feather="log-in"></i></span>
                    </li>
                   
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- END SIDEBAR MENU -->
        </nav>
        <!-- END SIDEBAR -->
        <!-- END SIDEBPANEL-->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container ">
                @include('includes.header')

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