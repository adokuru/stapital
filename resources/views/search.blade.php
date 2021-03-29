@include('layouts.header')

		<!-- Start listghor_breadcrumb section -->
		<section class="listghor_breadcrumb listghor_breadcrumb_1">
			<svg id="shape_1" width="272px" height="272px">
				<path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>
			</svg>
			<svg id="shape_2" width="272px" height="272px">
				<path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M136.000,-0.000 C211.111,-0.000 272.000,60.889 272.000,136.000 C272.000,211.111 211.111,272.000 136.000,272.000 C60.889,272.000 -0.000,211.111 -0.000,136.000 C-0.000,60.889 60.889,-0.000 136.000,-0.000 Z"/>
			</svg>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb_content text-center">
							<h2>{{ $category->name ?? "" }} Startups</h2>
							<ul class="breadcrumb_link">
								<li><a href="/">Home</a></li>
								<li><a href="/search/startups">{{ $category->name ?? "" }} Startups</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End listghor_breadcrumb section -->
		<!-- Start listghor_listing_list section -->
		<section class="listing_style_v4 listing_list_right_sidebar section_padding wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="listghor_sidebar listing_page_sidebar">
							<div class="widget_box search_box">
								<form>
									<div class="form_group">
										<input type="search" class="form_control" placeholder="Search">
										<i class="fas fa-search"></i>
									</div>
								</form>
							</div>
							<div class="widget_box categories_box">
								<div class="wb_title">
									<h5>Categories</h5>
								</div>
								<ul class="wb_link">
									<li><a href="#">Hotel <span>(27)</span></a></li>
									<li><a href="#">Resturaunt <span>(23)</span></a></li>
									<li><a href="#">Shopping <span>(42)</span></a></li>
									<li><a href="#">Beauty & Spa <span>(45)</span></a></li>
									<li><a href="#">Hospital <span>(19)</span></a></li>
									<li><a href="#">Nightlife <span>(09)</span></a></li>
								</ul>
							</div>
							<div class="widget_box features_box">
								<div class="wb_title">
									<h5>Sort By Features</h5>
								</div>
								<div class="wb_check_list">
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="check1" name="check1">
									  	<label class="single_input_label sigle_input_check" for="check1"><span>Open now</span></label>	
									</div>
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="check2" name="check1">
									  	<label class="single_input_label sigle_input_check" for="check2"><span>Near me</span></label>
									</div>
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="check3" name="check1">
									  	<label class="single_input_label sigle_input_check" for="check3"><span>Free Wifi</span></label>
									</div>
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="check4" name="check1">
									  	<label class="single_input_label sigle_input_check" for="check4"><span>Free Parking</span></label>
									</div>
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="check5" name="check1">
									  	<label class="single_input_label sigle_input_check" for="check5"><span>Events</span></label>
									</div>
								</div>
							</div>
							<div class="widget_box rateing_box">
								<div class="wb_title">
									<h5>Sort By Rating</h5>
								</div>
								<div class="wb_check_list">
									<div class="single_checkbox">
										<input type="radio" class="single_input" id="check6" name="radio1">
									  	<label class="single_input_label sigle_input_check" for="check6"><img src="{{asset('assets/images/rateing_1.png')}}" alt=""></label>
									</div>
									<div class="single_checkbox">
										<input type="radio" class="single_input" id="check7" name="radio1">
									  	<label class="single_input_label sigle_input_check" for="check7"><img src="{{asset('assets/images/rateing_2.png')}}" alt=""></label>
									</div>
									<div class="single_checkbox">
										<input type="radio" class="single_input" id="check8" name="radio1">
									  	<label class="single_input_label sigle_input_check" for="check8"><img src="{{asset('assets/images/rateing_3.png')}}" alt=""></label>
									</div>
									<div class="single_checkbox">
										<input type="radio" class="single_input" id="check9" name="radio1">
									  	<label class="single_input_label sigle_input_check" for="check9"><img src="{{asset('assets/images/rateing_4.png')}}" alt=""></label>
									</div>
									<div class="single_checkbox">
										<input type="radio" class="single_input" id="check10" name="radio1">
									  	<label class="single_input_label sigle_input_check" for="check10"><img src="{{asset('assets/images/rateing_5.png')}}" alt=""></label>
									</div>
								</div>
							</div>
							<div class="widget_box news_box">
								<div class="wb_title">
									<h5>Recent listing</h5>
								</div>
								<div class="wb_news_list">
									<div class="single_wb_news">
										<div class="news_thumb">
											<img src="{{asset('assets/images/thumb_1.jpg')}}" alt="">
										</div>
										<div class="news_info">
											<h2><a href="#">Lorem Ipsum is simpl dummy text of the printing .</a></h2>
											<p>25 May 2019</p>
										</div>
									</div>
									<div class="single_wb_news">
										<div class="news_thumb">
											<img src="{{asset('assets/images/thumb_2.jpg')}}" alt="">
										</div>
										<div class="news_info">
											<h2><a href="#">Lorem Ipsum is simpl dummy text of the printing .</a></h2>
											<p>25 May 2019</p>
										</div>
									</div>
									<div class="single_wb_news">
										<div class="news_thumb">
											<img src="{{asset('assets/images/thumb_3.jpg')}}" alt="">
										</div>
										<div class="news_info">
											<h2><a href="#">Lorem Ipsum is simpl dummy text of the printing .</a></h2>
											<p>25 May 2019</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@livewire('startups-pagination')
				</div>
			</div>
		</section>
		<!-- End listghor_listing_list section -->

@include('layouts.footer')