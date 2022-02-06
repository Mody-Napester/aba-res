<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ url('assets_dashboard/assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets_dashboard/assets/images/ico/icon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/custom-rtl.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets_dashboard/assets-custom/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

    @if(app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;400;700;900&display=swap" rel="stylesheet">

        <style>
            body,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{
                font-family: 'Tajawal', sans-serif;
            }
        </style>
    @endif

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
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


<!-- BEGIN: Vendor JS-->
{{--<script src="{{ url('assets_dashboard/assets-custom/vendors/js/vendors.min.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>--}}
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
{{--<script src="{{ url('assets_dashboard/assets/js/core/app-menu.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/js/core/app.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/js/scripts/components.js') }}"></script>--}}
{{--<script src="{{ url('assets_dashboard/assets/js/scripts/footer.js') }}"></script>--}}
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
