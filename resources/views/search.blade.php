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
		<livewire:startups-pagination />
		<!-- End listghor_listing_list section -->

@include('layouts.footer')