<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       <!-- All CSS is here
        ============================================ -->

        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/elegant.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/linear-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="main-wrapper">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }} <!-- This is where the page content will be inserted -->
            </main>

            @include('layouts.footer')
    
        </div>

        <!-- All JS is here
        ============================================ -->

        <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
        


        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @stack('scripts')

    </body>
</html>
