<!DOCTYPE html>
<html lang="en">
	
<head>
		<!-- all meta -->
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content=" Stapital - Startup & Invesor Portal ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Page Title -->
		<title>Stapital - Startup & Invesor Portal </title>
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
	  	<!-- All css here -->
		  @livewireStyles
	  	<!-- Bootstrap css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/bootstrap/css/bootstrap.min.css')}}">
	  	<!-- fontaweosme css -->
	  	<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/all.css')}}">
	  	<!-- flaticon css -->
	  	<link rel="stylesheet" href="{{asset('assets/fonts/flaticon/flaticon.css')}}">
	  	<!-- slick slider css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/slick/slick.css')}}">
	  	<link rel="stylesheet" href="{{asset('assets/plugin/slick/slick-theme.css')}}">
	  	<!-- magnific css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/magnific/magnific-popup.css')}}">
	  	<!-- sidebar css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/sidebar/sidebar-menu.css')}}">
	  	<!-- jquery_ui css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/jquery_ui/jquery-ui.min.css')}}">
	  	<!-- nices elect css -->
	  	<link rel="stylesheet" href="{{asset('assets/plugin/niceselect/nice-select.css')}}">
	  	<!-- animate css -->
	  	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	  	<!-- Style css -->
	  	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	  	<!-- Responsive css -->
	  	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
		
		{{-- App JS --}}
		<script src="{{ asset('js/app.js') }}" defer></script>
		  
	</head>
	<body>
		<!-- Start preloader  -->
		{{-- <div class="preloader_area">
			<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
		</div> --}}
        <!-- End preloader  -->
		<!-- Start header_area -->
		<header class="header_area header_v2 transparent_header">
			<div class="container">
				<!-- site_menu -->
				<div class="site_menu">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="listghor_logo">
								<a href="/"><img src="{{asset('assets/images/logo_2.png')}}" class="img-fluid cl_logo" alt="logo"></a>
								<a href="/"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid wh_logo" alt="logo"></a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="listghor_menu">
								<nav class="main_menu">
									<ul>
										<li class="menu-item"><a href="/">Home</a></li>
										<li class="menu-item"><a href="/search/startups">Start Ups</a></li>
										<li class="menu-item"><a href="/resources">Resources</a></li>
										<li class="menu-item"><a href="/blog">Blog</a></li>
										<li class="menu-item"><a href="/contact">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="menu_button">
								<a href="/register" class="listghor_btn"><i class="fas fa-plus"></i>Join Us</a>
							</div>
						</div>
					</div>
				</div><!-- site_menu -->
				<!-- mobile menu -->
				<div class="mobile_menu">
					<div class="row align-items-center">
						<div class="col-md-4 col-6">
							<div class="mobile_menu_logo">
								<a href="/" class="logo"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="mobile_logo"></a>
							</div>
						</div>
						<div class="col-md-8 col-6">
							<div class="mobile_menu_icon">
								<a href="#" class="menu_icon"><i class="fas fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="sidenav_menu">
						<div class="times_icon">
							<a href="#" class="menu_icon"><i class="fas fa-times"></i></a>
						</div>
						<div class="brand_logo text-center">
							<a href="/" class="logo"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="mobile logo"></a>
						</div>
						<div class="sidebar_search">
							<input type="text" placeholder="search here">
						</div>
						<ul class="sidebar-menu">
							<li><a href="/">Home<i class="fas fa-angle-down float-right"></i></a>
								
							</li>
							<li><a href="/search/startups">Start Ups<i class="fas fa-angle-down float-right"></i></a>
								
							</li>
							<li><a href="/resources">Resources<i class="fas fa-angle-down float-right"></i></a>
								
							</li>
							<li><a href="/blog">Blog<i class="fas fa-angle-down float-right"></i></a>
								
							</li>
							<li><a href="/contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<!-- mobile menu -->
			</div>
		</header><!-- End header_area -->
