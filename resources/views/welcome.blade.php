@include('layouts.header')
<!-- Start header_bg section -->
		<section class="hero_bg hero_v2 light_bg">
			<svg id="head_shape" width="1013px" height="1013px"><path fill-rule="evenodd"  fill="rgb(61,184,58)" d="M1.000,-0.000 C1.000,-0.000 -18.082,170.553 187.000,205.999 C561.196,270.675 193.939,1012.999 1013.000,1012.999 C1013.000,170.999 1013.000,-0.000 1013.000,-0.000 L1.000,-0.000 Z"/></svg>
			<img src="assets/images/shape_6.png" alt="shape_1" class="shape_1">
			<img src="assets/images/shape_7.png" alt="shape_2" class="shape_2">
			<img src="assets/images/shape_8.png" alt="shape_3" class="shape_3">
			<img src="assets/images/shape_9.png" alt="shape_4" class="shape_4">
			<img src="assets/images/shape_10.png" alt="shape_5" class="shape_5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-8">
						<div class="welcome_text wow fadeInLeft" data-wow-delay=".2s">
							<h2>Join our Startup 
									Community 
									Today!</h2>
								<p>Join our community and get all the  resources and guide you need for your startup or business.</p>
								<a href="/about" class="listghor_btn welcome_btn">Learn more</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="welcome_img listghor_img wow fadeInRight" data-wow-delay=".3s">
							<img src="assets/images/illustration_1.png"  alt="search_illustration">
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="hero_search hero_search_v2 text-center">
							<form method="POST" action="{{route('search_startups')}}">
								@csrf
								<div class="row">
									<div class="col-lg-5">
										<div class="form_group">
											<select name="categories" class="search_select">
												<option data-display="Categories">Categories</option>
												@forelse ($categories as $category)
												<option  value="{{$category->id}}">{{$category->name}}</option>
												@empty
												<option data-display="No Categories">No Categories</option>
												@endforelse
												
											</select>
											<i class="fas fa-list"></i>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="form_group">
											<select name="location" class="search_select">
												<option data-display="location">location</option>

												@forelse ($states as $state)
												<option value="{{$state->id}}">{{$state->name}}</option>
												@empty
												<option data-display="No States">No States Avaiable For This Country</option>
												@endforelse
												
											</select>
											<i class="fas fa-location-arrow"></i>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="filter_button">
											<button class="search_btn">Search</button>
										</div>
									</div>
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Start header_bg section -->
		<!-- Start listghor_about section -->
		<section class="listghor_about about_v1 about_v2 section_padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="listghor_img_box about_img_box wow fadeInLeft" data-wow-delay=".1s">
							<div class="listghor_img about_img">
								<img src="assets/images/about_3.png" class="img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="listghor_content_box about_content_box wow fadeInRight" data-wow-delay=".15s">
							<div class="about_content">
								<span>About Us</span>
								<h2>WE HELP TO GROW<br>BUSINESS</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy textLorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
							<div class="listghor_button">
								<a href="#" class="listghor_btn about_btn">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_about section -->
		<!-- Start listghor_top_category section -->
		<section class="category_v2 light_bg section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>OUR CATEGORIES</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="far fa-building"></i>
								</div>
								<div class="category_info">
									<h5>REAL ESTATE</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="fas fa-luggage-cart"></i>
								</div>
								<div class="category_info">
									<h5>TRAVEL</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="fas fa-spa"></i>
								</div>
								<div class="category_info">
									<h5>BEAUTY & SPA</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="fas fa-glass-cheers"></i>
								</div>
								<div class="category_info">
									<h5>NIGHT CLUB</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="fas fa-shopping-bag"></i>
								</div>
								<div class="category_info">
									<h5>SHOPPING</h5>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-12">
						<div class="category_box">
							<a href="listing_grid.html">
								<div class="category_icon">
									<i class="fas fa-cocktail"></i>
								</div>
								<div class="category_info">
									<h5>FOOD & DRINKS</h5>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	

		<!-- Start explore_city section -->
		<section class="explore_place listing_style_v2 section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>FEATURED STARTUPS</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="place_slider">
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_13.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="far fa-building"></i></a></li>
									
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Caravela Beach Resort</a></h3>
								<h4 class="price">10.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a>0</p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_14.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-luggage-cart"></i></a></li>
									
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Quality Inn Ocean Palms</a></h3>
								<h4 class="price">20.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="close_btn">Close now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_15.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-spa"></i></a></li>
									
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Royal Orchid Beach Resort</a></h3>
								<h4 class="price">30.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_14.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-glass-cheers"></i></a></li>
									
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">WelcomHeritage Panjim Pousada</a></h3>
								<h4 class="price">40.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="listing_item_box">
						<div class="listghor_img">
							<img src="assets/images/place_13.jpg" alt="">
							<a href="listing_details.html" class="overlay_img"></a>
							<div class="overlay_content">
								<ul>
									<li class="icon"><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
									
								</ul>
							</div>
						</div>
						<div class="listing_info">
							<div class="post_info">
								<h3><a href="listing_details.html">Bogmallo Beach Resor</a></h3>
								<h4 class="price">50.00</h4>
								<p class="location">Al Mankhool Road, Dubai</p>
								<p class="phone"><a href="tel:+123456789">+123 456 789</a></p>
							</div>
							<div class="post_meta">
								<ul>
									<li><a href="#"><i class="fas fa-home"></i>Real Estate</a></li>
									<li><a href="#" class="open_btn">open now</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End explore_city section -->
		<!-- Start how_it_work section -->
		<section class="working_process_v2 light_bg section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>SEE HOW IT WORKS?</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box iconshape_5">
							<div class="listghor_icon">
								<svg id="icon_shape_1" width="190px" height="155px"> <path fill-rule="evenodd"  fill="rgb(61,184,58" d="M1.408,30.506 C2.937,19.614 14.059,-2.593 38.972,0.312 C63.886,3.217 81.159,26.025 117.240,22.345 C153.322,18.666 174.283,29.027 184.698,49.575 C195.113,70.122 187.182,93.311 173.757,106.790 C160.332,120.270 140.621,119.716 125.667,121.237 C110.712,122.756 101.703,129.768 87.347,142.693 C72.990,155.617 57.211,158.484 45.141,148.670 C33.071,138.856 36.060,105.062 33.155,95.346 C30.250,85.630 15.400,75.334 9.290,64.627 C3.180,53.919 -0.712,45.614 1.408,30.506 Z"/></svg>
								<svg id="icon_shape_2" width="181px" height="178px"><path fill-rule="evenodd"  opacity="0.102" fill="rgb(61,184,58)" d="M40.000,130.999 C70.202,126.504 77.354,139.303 106.000,161.000 C134.645,182.696 166.883,182.421 179.000,160.000 C184.397,150.012 174.531,136.702 168.000,108.999 C161.469,81.297 177.483,52.529 169.000,26.999 C163.521,10.511 125.435,-10.014 94.000,5.999 C52.582,27.098 75.895,41.827 19.000,77.999 C-16.971,100.869 5.305,136.163 40.000,130.999 Z"/></svg>
								<i class="fas fa-users"></i>
							</div>
							<div class="listghor_info">
								<h4>Choose what to do</h4>
								<p>Lorem Ipsum is simply dummy text of the printing ad and type setting industry. Lorem Ipsum has been the industry's standa dummy </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box iconshape_5">
							<div class="listghor_icon">
								<svg id="icon_shape_3" width="190px" height="155px"> <path fill-rule="evenodd"  fill="rgb(61,184,58" d="M1.408,30.506 C2.937,19.614 14.059,-2.593 38.972,0.312 C63.886,3.217 81.159,26.025 117.240,22.345 C153.322,18.666 174.283,29.027 184.698,49.575 C195.113,70.122 187.182,93.311 173.757,106.790 C160.332,120.270 140.621,119.716 125.667,121.237 C110.712,122.756 101.703,129.768 87.347,142.693 C72.990,155.617 57.211,158.484 45.141,148.670 C33.071,138.856 36.060,105.062 33.155,95.346 C30.250,85.630 15.400,75.334 9.290,64.627 C3.180,53.919 -0.712,45.614 1.408,30.506 Z"/></svg>
								<svg id="icon_shape_4" width="181px" height="178px"><path fill-rule="evenodd"  opacity="0.102" fill="rgb(61,184,58)" d="M40.000,130.999 C70.202,126.504 77.354,139.303 106.000,161.000 C134.645,182.696 166.883,182.421 179.000,160.000 C184.397,150.012 174.531,136.702 168.000,108.999 C161.469,81.297 177.483,52.529 169.000,26.999 C163.521,10.511 125.435,-10.014 94.000,5.999 C52.582,27.098 75.895,41.827 19.000,77.999 C-16.971,100.869 5.305,136.163 40.000,130.999 Z"/></svg>
								<i class="fas fa-map-marked-alt"></i>
							</div>
							<div class="listghor_info">
								<h4>Find what you want</h4>
								<p>Lorem Ipsum is simply dummy text of the printing ad and type setting industry. Lorem Ipsum has been the industry's standa dummy </p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="work_box">
							<div class="listghor_icon">
								<svg id="icon_shape_5" width="190px" height="155px"> <path fill-rule="evenodd"  fill="rgb(61,184,58" d="M1.408,30.506 C2.937,19.614 14.059,-2.593 38.972,0.312 C63.886,3.217 81.159,26.025 117.240,22.345 C153.322,18.666 174.283,29.027 184.698,49.575 C195.113,70.122 187.182,93.311 173.757,106.790 C160.332,120.270 140.621,119.716 125.667,121.237 C110.712,122.756 101.703,129.768 87.347,142.693 C72.990,155.617 57.211,158.484 45.141,148.670 C33.071,138.856 36.060,105.062 33.155,95.346 C30.250,85.630 15.400,75.334 9.290,64.627 C3.180,53.919 -0.712,45.614 1.408,30.506 Z"/></svg>
								<svg id="icon_shape_6" width="181px" height="178px"><path fill-rule="evenodd"  opacity="0.102" fill="rgb(61,184,58)" d="M40.000,130.999 C70.202,126.504 77.354,139.303 106.000,161.000 C134.645,182.696 166.883,182.421 179.000,160.000 C184.397,150.012 174.531,136.702 168.000,108.999 C161.469,81.297 177.483,52.529 169.000,26.999 C163.521,10.511 125.435,-10.014 94.000,5.999 C52.582,27.098 75.895,41.827 19.000,77.999 C-16.971,100.869 5.305,136.163 40.000,130.999 Z"/></svg>
								<i class="fas fa-compass"></i>
							</div>
							<div class="listghor_info">
								<h4>Explore amazing place</h4>
								<p>Lorem Ipsum is simply dummy text of the printing ad and type setting industry. Lorem Ipsum has been the industry's standa dummy </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End how_it_work section -->
		<!-- Srart listghor_team section -->
		<section class="listghor_team_v2 section_padding light_bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>our stakeholders</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team_box wow fadeInUp">
							<div class="listghor_img team_img">
								<img src="assets/images/team_9.jpg" class="img-fluid" alt="">
								<div class="team_social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team_info">
								<div class="team_text">
									<h4>Ronald M. Steil</h4>
									<p>CEO & Funder</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team_box wow fadeInUp">
							<div class="listghor_img team_img">
								<img src="assets/images/team_10.jpg" class="img-fluid" alt="">
								<div class="team_social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team_info">
								<div class="team_text">
									<h4>Mitzi A. Gamble</h4>
									<p>Web Developer</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team_box wow fadeInUp">
							<div class="listghor_img team_img">
								<img src="assets/images/team_11.jpg" class="img-fluid" alt="">
								<div class="team_social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team_info">
								<div class="team_text">
									<h4>Thomas Stafford</h4>
									<p>Graphics Designer</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="team_box wow fadeInUp">
							<div class="listghor_img team_img">
								<img src="assets/images/team_12.jpg" class="img-fluid" alt="">
								<div class="team_social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team_info">
								<div class="team_text">
									<h4>Araceli J. Garcia</h4>
									<p>Digital Marketer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_team section -->
		<!-- Start listghor_blog section -->
		<section class="listghor_blog_v1 section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>OUR WEEKLY INSIGHTS</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						<div class="blog_box wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
							<div class="listghor_img">
								<img src="assets/images/blog_1.jpg" class="img-fluid" alt="">
								<a href="blog_details.html"><div class="overlay_img"></div></a>
								<div class="overlay_content">
									<h2><a href="blog_details.html">New York in City</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="blog_list_wrapper">
							<div class="blog_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_2.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Best Resturant In Bangladesh</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_3.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Spent your holiday with best places</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
								<div class="listghor_img">
									<a href="blog_details-2.html"><img src="assets/images/blog_4.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Best Resturant In Bangladesh</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
							<div class="blog_box wow fadeInUp" style="visibility: hidden; animation-name: none;">
								<div class="listghor_img">
									<a href="blog_details.html"><img src="assets/images/blog_5.jpg" alt=""></a>
								</div>
								<div class="blog_info">
									<h2><a href="blog_details.html">Spent your holiday with best places</a></h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text.</p>
									<h6><i class="fas fa-calendar-alt"></i>Aug 20,2019</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor-blog section -->
				<!-- Start Community section -->
				<section class="listghor_community section_padding">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6">
								<div class="listghor_content_box text-center">
									<div class="community_text">
										<h2>Join Our Community</h2>
										<p>It is a long established fact that a reader will be distracted by the read able content of a page when looking at its layout. </p>
										<a href="/register" class="listghor_btn">Join With Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End Community section -->
		<!-- Start listghor_client section -->
		<section class="listghor_testimonial_v2 section_padding light_bg">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="listghor_title text-center">
							<h2>WHAT OUR INVESTORS SAY</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="client_slider_2">
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_3.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_4.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
							<div class="client_review_box client_review_box_2">
								<div class="client_admin">
									<div class="avatar_thumb">
										<img src="assets/images/admin_2.jpg" alt="">
									</div>
									<div class="avatar_text">
										<h4>JOHN DOE</h4>
										<h6>Co Founder & CEO</h6>
										<ul class="rateing_star">
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="client_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint molestiae distinctio culpa qui reiciendis eveniet enim, nemo velit repudiandae unde!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_client section -->
		<!-- Start listghor_contact section -->
		<section class="listing_contact_v1 section_padding">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="listghor_img_box contact_img_box">
							<div class="contact_img listghor_img">
								<img src="assets/images/contact_1.png" class="contact_img_1 img-fluid" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="listghor_content_box contact_content_box">
							<div class="contact_title">
								<h2>GET IN TOUCH</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
							</div>
							<div class="contact_form">
								<form>
									<div class="form_gorup">
										<input type="text" class="form_control" placeholder="Your name" required>
									</div>
									<div class="form_gorup">
										<input type="email" class="form_control" placeholder="Your email" required>
									</div>
									<div class="form_gorup">
										<textarea name="message" class="form_control" placeholder="Your message" required></textarea>
									</div>
									<div class="form_button">
										<button type="submit" class="listghor_btn form_btn">submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_contact section -->

@include('layouts.footer')