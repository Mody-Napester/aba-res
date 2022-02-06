<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<?php

    if(lang() == 'ar'){
        $css_direction = 'css-rtl';
        $style_direction = 'style-rtl';
    }else{
        $css_direction = 'css';
        $style_direction = 'style';
    }

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ url('assets_dashboard/assets/images/ico/apple-icon-120.png') }}">
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_dashboard/assets/images/ico/favicon.ico') }}">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_dashboard/assets/images/ico/icon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/vendors-rtl.min.css') }}">
{{--    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/charts/apexcharts.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/extensions/dragula.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/custom-rtl.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/pages/widgets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/'. $css_direction .'/pages/dashboard-analytics.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets-custom/css/'. $style_direction .'.css') }}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets-custom/css/toastr.css') }}">

    @if(app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;400;700;900&display=swap" rel="stylesheet">

        <style>
            body,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6،, .navigation, .table th, .table td,
            .modal .modal-content .modal-header .modal-title, .header-navbar,
            .collapsible .card .card-header, .accordion .card .card-header{
                font-family: 'Tajawal', sans-serif;
            }
        </style>
    @endif

    <style>
        .header-navbar{
            border-bottom: 1px solid #ddd;
        }
        .table td {
            padding: 5px 10px;
        }
        .table .btn-group .btn {
            padding: 2px 8px;
        }
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            color: #FD4953;
        }
        .card-data {
            /*padding: 5px;*/
            /*border: 1px solid #eeeeee;*/
            /*margin-bottom: 10px;*/
        }
        .side-text {
            color: #FD4953;
            font-weight: bold;
            font-size: 18px !important;
        }
        .form-control-cm {
            border-width: 1px;
            border-style: solid;
            border-color: #eeeeee;
            border-radius: 5px;
            outline: none;
            padding: 3px;
            width: 100%;
        }
    </style>

    @yield('post_head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(lang() == 'ar')
                                <i class="flag-icon flag-icon-jo"></i><span class="selected-language">عربي</span>
                            @else
                                <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
                            @endif
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="{{ route('language', ['ar']) }}" data-language="ar"><i class="flag-icon flag-icon-jo mr-50"></i> عربي</a>
                            <a class="dropdown-item" href="{{ route('language', ['en']) }}" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name">{{ auth()->user()->name }}</span>
                                <span class="user-status text-muted">Available</span>
                            </div>

                            <span>
                                <img class="round" src="{{ url('assets_dashboard/assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40">
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right pb-0">
{{--                            <a class="dropdown-item" href=""><i class="bx bx-user mr-50"></i> Edit Profile</a>--}}

{{--                            <div class="dropdown-divider mb-0"></div>--}}

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                    <div class="brand-logo">
                        <img width="150" src="{{ url('assets_dashboard/assets/images/logo/aba-logo.png') }}" alt="">
                    </div>
{{--                    <h2 class="brand-text mb-0"></h2>--}}
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content mt-2 mb-4">
        @include('@dashboard._layouts.sidebar')
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            @yield('content')

        </div>
    </div>
</div>
<!-- END: Content-->

<!-- demo chat-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">
        <span class="float-left d-inline-block">{{ date('Y') }} &copy; {{ config('app.name') }}</span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->

<!-- Modals -->
@include('@dashboard._modals.confirm_delete')

<!-- BEGIN: Vendor JS-->
<script src="{{ url('assets_dashboard/assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{--<script src="{{ url('assets_dashboard/assets/vendors/js/charts/apexcharts.min.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/vendors/js/extensions/dragula.min.js') }}"></script>--}}
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>

<script src="{{ url('assets_dashboard/assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('assets_dashboard/assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/js/core/app.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/js/scripts/components.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/js/scripts/footer.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{--<script src="{{ url('assets_dashboard/assets/js/scripts/pages/dashboard-analytics.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/js/scripts/pages/app-users.js"></script>--}}
<script src="{{ url('assets_dashboard/assets/js/scripts/datatables/datatable.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/js/scripts/forms/select/form-select2.js') }}"></script>
<script src="{{ url('assets_dashboard/assets/js/scripts/pages/app-invoice.js') }}"></script>
<!-- END: Page JS-->

<script src="{{ url('assets_dashboard/assets-custom/js/toastr.min.js') }}"></script>
<script src="{{ url('assets_dashboard/assets-custom/js/custom.js') }}"></script>

@toastr_render

@yield('scripts')

</body>
<!-- END: Body-->

</html>
