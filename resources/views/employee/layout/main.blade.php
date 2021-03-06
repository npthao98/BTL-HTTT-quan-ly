
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets\images\favicon.ico">

    <!-- third party css -->
    <link href="{{ URL::asset('assets\libs\datatables\dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets\libs\datatables\buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets\libs\datatables\responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets\libs\datatables\select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ URL::asset('assets\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ URL::asset('assets\css\icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets\css\app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
    @yield('head')

</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ URL::asset('images\thongtintk.png') }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                                My account   <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <div class="dropdown-divider"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item notify-item" type="submit">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                    <a href="/employee/changepw" class="dropdown-item notify-item">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Change password</span>
                    </a>

                </div>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="{{ URL::asset('assets\images\logo-dark.png') }}" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="{{ URL::asset('assets\images\logo-sm.png') }}" alt="" height="22">
                        </span>
            </a>

            <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="{{ URL::asset('images\banner.png') }}" alt="" height="18" style="height: 70px; margin-left: 13px">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="{{ URL::asset('assets\images\logo-sm.png') }}" alt="" height="22">
                        </span>
            </a>
        </div>

        <!-- LOGO -->

    </div>
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <div id="sidebar-menu">
                @yield('menu')
            </div>

            <div class="clearfix"></div>

        </div>

    </div>

    <div class="content-page">
        @yield('content')
    </div>


</div>

<script src="{{ URL::asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\jszip\jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\pdfmake\pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\pdfmake\vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.print.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ URL::asset('assets\libs\datatables\dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\responsive.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\dataTables.keyTable.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\dataTables.select.min.js') }}"></script>

<!-- Datatables init -->
<script src="{{ URL::asset('assets\js\pages\datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('assets\js\app.min.js') }}"></script>

</body>

</html>
