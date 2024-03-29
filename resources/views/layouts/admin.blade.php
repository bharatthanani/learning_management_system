<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __(@$title) }}</title>

    <!-- Favicon included -->
    <link rel="shortcut icon" href="{{getImageFile(get_option('app_fav_icon'))}}" type="image/x-icon">

    <!-- Apple touch icon included -->
    <link rel="apple-touch-icon" href="{{getImageFile(get_option('app_fav_icon'))}}">

    <link rel="stylesheet" href="{{asset('admin/sweetalert2/sweetalert2.css')}}">

    <!-- All CSS files included here -->
    <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    @stack('style')
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/admin-extra.css')}}">
    <link href="{{asset('common/css/select2.css')}}" rel="stylesheet">
    @toastr_css

</head>
<body class=" {{selectedLanguage()->rtl == 1 ? 'direction-rtl' : 'direction-ltr' }} ">

@if(get_option('allow_preloader') == 1)
    <!-- Pre Loader Area start -->
    <div id="preloader">
        <div id="preloader_status"><img src="{{getImageFile(get_option('app_preloader'))}}" alt="img" /></div>
    </div>
    <!-- Pre Loader Area End -->
@endif

<!-- Sidebar area start -->
@include('admin.common.sidebar')
<!-- Sidebar area end -->

<!-- Main Content area start -->
<div class="main-content">

    <!-- Header section start -->
    @include('admin.common.header')
    <!-- Header section end -->

    <!-- page content wrap start -->
    <div class="page-content-wrap">
        <!-- Page content area start -->
        @yield('content')
        <!-- Page content area end -->

        <!-- Footer section start -->
        @include('admin.common.footer')
        <!-- Footer section end -->
    </div>
    <!-- page content wrap end -->

</div>
<!-- Main Content area end -->

<input type="hidden" id="base_url" value="{{url('/')}}">

<!-- All Javascript files included here -->
<script src="{{asset('frontend/assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('common/js/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/sweetalert2/sweetalert2.all.js')}}"></script>
<script src="{{ asset('common/js/iconify.min.js') }}"></script>
@stack('script')
<script src="{{asset('admin/js/admin-custom.js')}}"></script>
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/js/main.js')}}"></script>
<script src="{{asset('common/js/select2.min.js')}}"></script>

@toastr_js
@toastr_render

@if (@$errors->any())
    <script>
        "use strict";
        @foreach ($errors->all() as $error)
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{ $error }}")
        @endforeach
    </script>
@endif
@if(session()->has('success'))
    <script>
        "use strict";
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.success("{{ session()->get('success') }}")
    </script>
@endif
</body>
</html>
