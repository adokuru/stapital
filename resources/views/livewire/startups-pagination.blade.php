<section class="listing_style_v4 listing_list_right_sidebar section_padding wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="listghor_sidebar listing_page_sidebar">
							<div class="widget_box search_box">
							
									<div class="form_group">
										<input wire:model="searchCompanyName" type="search" class="form_control" placeholder="Search">
										<i class="fas fa-search"></i>
									</div>
								
							</div>
							<div class="widget_box categories_box">
								<div class="wb_title">
									<h5>Categories</h5>
								</div>
								<ul class="wb_check_list">
                                    @forelse ($categories as $category)
									<div class="single_checkbox">
										<input type="checkbox" class="single_input" id="{{$category->name}}" name="{{$category->id}}">
									  	<label class="single_input_label sigle_input_check" for="{{$category->name}}"><span>{{$category->name}}</span></label>	
									</div>
                                    @empty
                                    <option data-display="No Categories">No Categories</option>
                                    @endforelse
								</ul>
							</div>
							<div class="widget_box features_box">
								<div class="wb_title">
									<h5>Sort By States</h5>
								</div>
								<div class="wb_check_list">
                                @forelse ($states as $state)
                                    <div class="single_checkbox">
										<input type="checkbox" class="single_input" id="{{$state->name}}" name="{{$state->id}}">
									  	<label class="single_input_label sigle_input_check" for="{{$state->name}}"><span>{{$state->name}}</span></label>	
									</div>
                                    @empty
                                    <option data-display="No Categories">No States</option>
                                    @endforelse
									
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
                                @foreach($startups->take(3) as $startup)
									<div class="single_wb_news">
										<div class="news_thumb">
											<img src="http://via.placeholder.com/75x75/3db83a/FFFFFF.webp?text=StartUp+Image" alt="">
										</div>
										<div class="news_info">
											<h2><a href="/startup/{{$startup->id}}">{{$startup->name}}</a></h2>
											<p>{{$startup->created_at}}</p>
										</div>
									</div>
                                @endforeach
								</div>
							</div>
						</div>
					</div>
					
                        {{-- Do your work, then step back. --}}
    <div class="col-lg-8">
        <div class="listghor_listing_wrapper">
            @forelse ($startups as $startup)
            <div class="listing_item_box">
                <div class="listghor_img">
                    <img src="http://via.placeholder.com/270x270/3db83a/FFFFFF.webp?text=StartUp+Image" alt="">
                    <a href="/startup/{{$startup->id}}" class="overlay_img"></a>
                    
                </div>
                <div class="listing_info">
                    <div class="post_info">
                        <h3><a href="/startup/{{$startup->id}}">{{$startup->name}}</a></h3>
                        <p class="location">{{$startup->address}}{{-- ,{{$startup->state->name}},{{$startup->country->name}}--}}</p> 
                        <ul class="st_rateing">
                            <li><i class="fas fa-star"></i><span>4.5</span></li>
                            <li><a href="#">178</a><span> Reviews</span></li>
                        </ul>
                        <p class="st_content">{{$startup->about}}</p>
                    </div>
                    <div class="post_meta">
                        <ul>
                            <li><a href="/startup/{{$startup->id}}" class="open_btn">More Details</a></li>
                            <li class="icon"><a href="#"><i class="far fa-comment-alt"></i></a></li>
                            <li class="icon"><a href="#"><i class="fas fa-phone"></i></a></li>
                            <li class="icon"><a href="#"><i class="far fa-envelope"></i></a></li>
                            <li class="icon"><a href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
               <h3> No Start Ups Matching Your Search Parameter</h3>
            @endforelse
            
            
        </div>
        {{-- <div class="listghor_pagination text-center">
            <ul>
                <li class="prev"><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#"><i class="fas fa-arrow-right"></i></a></li>
            </ul>
        </div> --}}
        {{ $startups->onEachSide(1)->links('components.startup_pagination') }} 
    </div>

    <script>
        Livewire.on('gotoTop', () => {
            window.scrollTo({
                top: 15,
                left: 15,
                behaviour: 'smooth'
            })
        })
</script>
				</div>
			</div>
		</section>