<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8" />
        <link href="{{ asset('userdashboard/dist/images/favicon.ico') }}" rel="shortcut icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Lawna Pastors" />
        
        <meta name="author" content="DanoiTech" />
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


        <title>@yield('title')  LAWNA PASTORS</title>

        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('userdashboard/dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="/" class="flex mr-auto">
                    <img
                        alt="Lawna Pastors"
                        class="w-6"
                        src="{{asset('userdashboard/dist/images/logo.png')}}"
                    />
                    <span class="xl:block text-white text-lg ml-3 font-medium"
                        >Lawna Pastors</span
                    >
                </a>
                <a href="javascript:;" id="mobile-menu-toggler">
                    <i
                        data-feather="bar-chart-2"
                        class="w-8 h-8 text-white transform -rotate-90"
                    ></i>
                </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="/" class="menu menu--active">
                        <div class="menu__icon">
                            <i data-feather="home"></i>
                        </div>
                        <div class="menu__title">
                            Dashboard
                        </div>
                    </a>
                </li>
                
                <li>
                    <a href="" class="menu">
                        <div class="menu__icon">
                            <i data-feather="user"></i>
                        </div>
                        <div class="menu__title">
                            Pastors
                        </div>
                    </a>
                </li>             
                
                <li>
                    <a href="/logout" class="menu">
                        <div class="menu__icon">
                            <i data-feather="box"></i>
                        </div>
                        <div class="menu__title">
                            Logout
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            @yield('nav')
            <!-- END: Side Menu -->
            @yield('body')
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('userdashboard/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
