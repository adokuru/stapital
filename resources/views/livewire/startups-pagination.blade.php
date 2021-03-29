    {{-- Do your work, then step back. --}}
    <div class="col-lg-8">
        <div class="listghor_listing_wrapper">
            @forelse ($startups as $startup)
            <div class="listing_item_box">
                <div class="listghor_img">
                    <img src="https://via.placeholder.com/270x270/3db83a/FFFFFF.webp?text=StartUp+Image" alt="">
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
                No Start Ups
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

