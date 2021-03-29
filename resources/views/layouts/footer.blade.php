		<!-- Start listghor_foooter -->
		<footer class="listghor_foooter foooter_v2 " style="background: rgb(61,184,58);">
			{{-- bg_image style="background-image: url(assets/images/footer_bg_1.jpg); --}}
			<div class="container">
				<div class="footer_widget_wrapper">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="widget_box about_widget wow fadeInUp">
								<div class="widget_title">
									<img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="footer_logo">
								</div>
								<div class="widget_content">
									<p>Lorem Ipsum is simply duammy text of the printing aadnd type an setting industry. </p>
									<ul class="social_link">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 offset-lg-1 col-md-6 col-sm-12">
							<div class="widget_box widget_link wow fadeInUp">
								<div class="widget_title">
									<h4>Useful Links</h4>
								</div>
								<ul class="widget_list">
									<li><a href="#">Categories</a></li>
									<li><a href="#">Start Ups</a></li>
									<li><a href="#">Resources</a></li>
									<li><a href="#">Investors</a></li>
									<li><a href="#">Stakeholders</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12">
							<div class="widget_box widget_link wow fadeInUp">
								<div class="widget_title">
									<h4>About us</h4>
								</div>
								<ul class="widget_list">
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Expert Team</a></li>
									<li><a href="#">Review</a></li>
									<li><a href="#">Faq Question</a></li>
									<li><a href="#">Blog Post</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="widget_box contact_widget wow fadeInUp">
								<div class="widget_title">
									<h4>Contact Us</h4>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="list_info">
										<p> 360 Harvest ST,North subtract <br>LondonUnited States of America</p>
									</div>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="far fa-envelope"></i>
									</div>
									<div class="list_info">
										<p><a href="mailto:listghortemplete@gmail.com">listghortemplete@gmail.com</a></p>
									</div>
								</div>
								<div class="contact_list">
									<div class="list_icon">
										<i class="fas fa-phone"></i>
									</div>
									<div class="list_info">
										<p><a href="tel:3837389227717">3837 3892 27717</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_copyright">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright_text">
								<p>Copyright ©2021</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright_link">
								<ul>
									<li><a href="#">Privace & Policy</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Terms</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End listghor_foooter -->
		<!-- scroll_top -->
		<a id="scroll_top"><i class="fas fa-angle-up"></i></a>
		<!-- jquery  -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!--modernizr js-->
        <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
	    <!-- bootstrap js -->
	    <script src="{{asset('assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
	    <!-- popper js -->
	    <script src="{{asset('assets/plugin/bootstrap/js/popper.min.js')}}"></script>
	    <!-- slick slider js -->
	    <script src="{{asset('assets/plugin/slick/slick.min.js')}}"></script>
	    <!-- magnific popup js -->
	    <script src="{{asset('assets/plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
	    <!-- isotope js -->
	    <script src="{{asset('assets/plugin/isotope/isotope.min.js')}}"></script>
	    <!-- imagesloaded js -->
	    <script src="{{asset('assets/plugin/imagesloaded/imagesloaded.min.js')}}"></script>
	    <!-- couterup js -->
	    <script src="{{asset('assets/plugin/counterup/jquery.waypoints.min.js')}}"></script>
	    <script src="{{asset('assets/plugin/counterup/jquery.counterup.min.js')}}"></script>
	    <!-- jquery_ui js -->
	    <script src="{{asset('assets/plugin/jquery_ui/jquery-ui.min.js')}}"></script>
	    <!-- sidebar js -->
	    <script src="{{asset('assets/plugin/sidebar/sidebar-menu.js')}}"></script>
	    <!-- nice select js -->
	    <script src="{{asset('assets/plugin/niceselect/jquery.nice-select.min.js')}}"></script>
	    <!-- wow js -->
	    <script src="{{asset('assets/js/wow.min.js')}}"></script>
	    <!-- main js -->
	    <script src="{{asset('assets/js/main.js')}}"></script>

		@livewireScripts
		<script>
			$(document).on('click', '#page-link-scroll-to-top', function (e) {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
			});
		</script>
	</body>

</html>