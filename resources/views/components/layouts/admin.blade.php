<!doctype html>
<html lang="en">
<title>Admin view</title>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">


    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <title>
        Administration
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1') }}" rel="stylesheet"/>

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    @livewireStyles
</head>

<body class="g-sidenav-show bg-gray-100">

@include('admin.layouts.navbars.sidebar')

<div class="main-content position-relative bg-gray-100">
    <div>
        @include('admin.layouts.navbars.nav')
        {{ $slot }}
    </div>

</div>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>

<x-flash/>

@livewireScripts
</body>
