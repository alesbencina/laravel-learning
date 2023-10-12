<!doctype html>
<html lang="en">
<title>Admin view</title>
<head>
    <title>
        Administration
    </title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet"/>

    <!-- Alpine -->
    <script src="{{ asset('assets/js/plugins/cke5/build/ckeditor.js') }}"></script>

    @livewireStyles
</head>

<body class="g-sidenav-show bg-gray-100">

@include('admin.layouts.navbars.sidebar')

<div class="main-content position-relative bg-gray-100">
    <div>
        @include('admin.layouts.navbars.nav')
        {{ $slot }}
    </div>
    @include('components.flash.admin_flash')
</div>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/soft-ui-dashboard.js') }}"></script>

@livewireScripts
</body>
