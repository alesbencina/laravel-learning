<!doctype html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset("assets/css/tailwind.min.css?v=1") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/css/ckeditor.css?v=1") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/highlight/highlight/styles/github-dark.min.css?v=1') }}" type="text/css">

    <script src="{{ asset('assets/js/plugins/highlight/highlight/highlight.min.js?v=1') }}"></script>
    <script src="{{ asset('assets/js/plugins/highlight/highlight/languages/css.min.js?v=1') }}"></script>
    <title>@yield('meta_title', 'AB, Blog')</title>
    <meta name="description" content=">@yield('meta_description', 'AB, Blog')">
    <link rel="canonical" href="{{ url()->full() }}" />
    <meta name="robots" content="index, follow">

    @livewireStyles
</head>
<body>

@livewireScripts

<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                Logo placeholder
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @livewire('menu')

            @if(auth()->check())
                <span class="text-xs font-bold uppercase">Logged in: {{ auth()->user()->email }}</span>
                <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-5">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
            @endif
        </div>

    </nav>

    {{ $slot }}

</section>
@include('components.flash.flash')
</body>

<footer class="bg-opacity-80 backdrop-blur-lg py-6">
    <div class="container mx-auto text-center">
        &copy; 2023 Ales Bencina. All rights reserved.
    </div>
</footer>
