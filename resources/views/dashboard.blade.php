<livewire:styles/>
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section class="listghor_add_listing listghor_add_listing_1 section_padding wow fadeInUp">
			<div class="container">
				<div class="add_listing_from">
					<form>
						<div class="listing_form general_form">
							<h4>General Information :</h4>
							<div class="row">
								<div class="col-lg-6">
									<div class="form_group">
										<label>Listing Title :</label>
										<input type="text" class="form_control" placeholder="Title" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Select Category :</label>
										<select class="search_select">
											<option data-display="Select Category">Real Estate</option>
											<option>travel</option>
											<option>Beauty & Spa</option>
											<option>Night Club</option>
											<option>Shopping</option>
											<option>Resturaunt</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Keywords:</label>
										<input type="text" class="form_control" placeholder="Keyword should be separeted by commas">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Website :</label>
										<input type="text" class="form_control" placeholder="Enter website address">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form_group">
										<label>Price :</label>
										<input type="text" class="form_control" placeholder="Price">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form_group">
										<label>Phone :</label>
										<input type="text" class="form_control" placeholder="Enter phone number" name="phone">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form_group">
										<label>E-mail :</label>
										<input type="text" class="form_control" placeholder="Enter phone number">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_group">
										<label>About Listing :</label>
										<textarea  class="form_control" placeholder="Describe the listing"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="amenities_list">
										<label>Amenities :</label>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check1" name="check1">
										  	<label class="single_input_label sigle_input_check" for="check1"><span>Elevator in building</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check2" name="check2">
										  	<label class="single_input_label sigle_input_check" for="check2"><span>Friendly Workspace</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check3" name="check3">
										  	<label class="single_input_label sigle_input_check" for="check3"><span>Instant Book</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check4" name="check4">
										  	<label class="single_input_label sigle_input_check" for="check4"><span>Wireless Internet</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check5" name="check5">
										  	<label class="single_input_label sigle_input_check" for="check5"><span>TV</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check6" name="check6">
										  	<label class="single_input_label sigle_input_check" for="check6"><span>Refrigerator</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check7" name="check7">
										  	<label class="single_input_label sigle_input_check" for="check7"><span>Events</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check8" name="check8">
										  	<label class="single_input_label sigle_input_check" for="check8"><span>Free Parking</span></label>
										</div>
										<div class="single_checkbox">
											<input type="checkbox" class="single_input" id="check10" name="check10">
										  	<label class="single_input_label sigle_input_check" for="check10"><span>Security</span></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="listing_form location_form">
							<h4>Location :</h4>
							<div class="row">
								<div class="col-lg-6">
									<div class="form_group">
										<label>Address :</label>
										<input type="text" class="form_control" placeholder="Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>State :</label>
										<select class="search_select">
											<option data-display="Select State">Alaska</option>
											<option>California</option>
											<option>Florida</option>
											<option>New York</option>
											<option>Texas</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Country :</label>
										<select class="search_select">
											<option data-display="Select Counry">Bangladesh</option>
											<option>China</option>
											<option>United States</option>
											<option>India</option>
											<option>Russia</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Postal Code :</label>
										<input type="text" class="form_control" placeholder="Postal Code">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Google Maps Latitude :</label>
										<input type="text" class="form_control" placeholder="Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Google Maps Longitude :</label>
										<input type="text" class="form_control" placeholder="Address">
									</div>
								</div>
							</div>
						</div>
						<div class="listing_form opening_hours">
							<h4>opening hours :</h4>
							<div class="day_hours_list">
								<div class="day_hours">
									<div class="row align-items-center">
										<div class="col-3">
											<div class="weekday">
												<h5>Sunday</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="st_time">
												<h5>9.00 Am</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="ed_time">
												<h5>5.00 Pm</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="add_remove">
												<a href="#" class="times"><i class="fas fa-times"></i></a>
											</div>
										</div>
									</div>		
								</div>
								<div class="day_hours">
									<div class="row align-items-center">
										<div class="col-3">
											<div class="weekday">
												<h5>Monday</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="st_time">
												<h5>9.00 Am</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="ed_time">
												<h5>5.00 Pm</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="add_remove">
												<a href="#" class="times"><i class="fas fa-times"></i></a>
											</div>
										</div>
									</div>		
								</div>
								<div class="day_hours">
									<div class="row align-items-center">
										<div class="col-3">
											<div class="weekday">
												<h5>Tuesday</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="st_time">
												<h5>9.00 Am</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="ed_time">
												<h5>5.00 Pm</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="add_remove">
												<a href="#" class="times"><i class="fas fa-times"></i></a>
											</div>
										</div>
									</div>		
								</div>
								<div class="day_hours">
									<div class="row align-items-center">
										<div class="col-3">
											<div class="weekday">
												<h5>Wednesday</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="st_time">
												<h5>9.00 Am</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="ed_time">
												<h5>5.00 Pm</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="add_remove">
												<a href="#" class="times"><i class="fas fa-times"></i></a>
											</div>
										</div>
									</div>		
								</div>
								<div class="day_hours">
									<div class="row align-items-center">
										<div class="col-3">
											<div class="weekday">
												<h5>Thrusday</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="st_time">
												<h5>9.00 Am</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="ed_time">
												<h5>5.00 Pm</h5>
											</div>
										</div>
										<div class="col-3">
											<div class="add_remove">
												<a href="#" class="times"><i class="fas fa-times"></i></a>
											</div>
										</div>
									</div>		
								</div>
								<div class="add_day_hours day_hours">
									<div class="row align-items-center">
										<div class="col-lg-3 col-6">
											<div class="weekday">
												<select class="search_select">
													<option data-display="Add day">Saturday</option>
													<option>Sunday</option>
													<option>Monday</option>
													<option>Tuesday</option>
													<option>Wednesday</option>
													<option>Thrusday</option>
													<option>Friday</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-6">
											<div class="st_time">
												<select class="search_select">
													<option data-display="Start Time">7.00 Am</option>
													<option>8.00 Am</option>
													<option>9.00 Am</option>
													<option>10.00 Am</option>
													<option>11.00 Am</option>
													<option>12.00 Pm</option>
													<option>01.00 pm</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-6">
											<div class="ed_time">
												<select class="search_select">
													<option data-display="Start Time">5.00 Pm</option>
													<option>6.00 Pm</option>
													<option>7.00 Pm</option>
													<option>8.00 Pm</option>
													<option>9.00 Pm</option>
													<option>10.00 Pm</option>
													<option>11.00 Pm</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-6">
											<div class="add_remove">
												<a href="#" class="plus"><i class="fas fa-plus"></i></a>
											</div>
										</div>
									</div>		
								</div>
							</div>
						</div>
						<div class="listing_form gallery_form">
							<h4>gallery :</h4>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<div class="file_upload">
											<input type="file" name="file">
											<div class="upload_content">
												<div class="upload_content_text">
													<i class="far fa-image"></i>
													<p>Drop Picture here to Upload</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="listing_form social_form">
							<h4>social networks :</h4>
							<div class="row">
								<div class="col-lg-6">
									<div class="form_group">
										<label>Facebook :</label>
										<input type="text" class="form_control" placeholder="Facebook URL" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Twitter :</label>
										<input type="text" class="form_control" placeholder="Twitter URL" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Linkedin :</label>
										<input type="text" class="form_control" placeholder="Linkedin URL" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_group">
										<label>Pinterest :</label>
										<input type="text" class="form_control" placeholder="Pinterest URL" required>
									</div>
								</div>
							</div>
						</div>
						<div class="submit_button">
							<div class="row">
								<div class="col-lg-12">
									<div class="form_btton text-right">
										<button class="listghor_btn form_btn">Submit listing</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
    </div>
</x-app-layout>
