<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<!-- Favicon -->
        <!-- apple icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/favicon/apple_57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/favicon/apple_72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/favicon/apple_114.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/favicon/apple_144.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="192x192" href="{{asset('assets/images/apple_precomposed.html')}}">
        <!-- android icon -->
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/images/favicon/android_192.png')}}">
        <!-- web browser icon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon/favicon_16.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/images/favicon/favicon_32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon/favicon_96.png')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
