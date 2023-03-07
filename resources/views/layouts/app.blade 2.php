<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'JEAN PIAGET') }}</title>

    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- ink rel="stylesheet" href="{{ asset('css/style.css') }}"-->
    <link rel="stylesheet" href="{{ asset('css/barra/pace2.css') }}">

    <link  rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link  rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"/>


    <style>
        select{
            color: #333 !important;
        }
        thead{
            text-align:center;
            background: #cecece;
        }
        .w-5{
            width: 40px !important;
        }

        #sinDeudas h2{
            color: green;
            font-weight: 600;
            background-color: #f9f9f9;
            padding: 15px 5px;
        }
        .sidebar .nav .nav-item.active > .nav-link i, .sidebar .nav .nav-item.active > .nav-link .menu-title, .sidebar .nav .nav-item.active > .nav-link .menu-arrow{
            color: #FF9900 !important;
        }
        .btn-primary {
            color: #fff;
            background-color: #ffb716;
            border-color: #ffb716;
        }
        .btn-primary:hover{
            background-color: #FF9900;
            border-color: #FF9900;
        }
        .nav-link:hover{
            color: #FF9900 !important;
            font-weight: 600;
        }
        .text-primary{
            color: #FF9900 !important;
        }
        .mdi-menu{
            color: #fff !important;
        }
        label{
            max-width: 100% !important;
        }
    </style>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico')}}">
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('js/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('js/vendor/notyf/notyf.min.css')}}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('css/volt.css')}}" rel="stylesheet">

</head>
<body>
<div id="app">
    {{--  @include('layouts.menuHorizontal')--}}

    @include('layouts.menuVertical')



    <main class="content">


        @yield('content')

    </main>


</div>


@include('layouts.layoutJS')

@yield('script')


<!-- Core -->
<script src="{{ asset('js/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="/js/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="{{ asset('js/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Slider -->
<script src="{{ asset('js/vendor/nouislider/dist/nouislider.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{ asset('js/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Charts -->
<script src="{{ asset('js/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{ asset('js/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{ asset('js/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{ asset('js/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{ asset('js/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Notyf -->
<script src="{{ asset('js/vendor/notyf/notyf.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{ asset('js/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="{{ asset('js/volt.js')}}"></script>
</body>
</html>
