<section id="slider" class="slider-element swiper_wrapper full-screen clearfix" data-dots="true" data-loop="true"
         data-grab="false">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            @if(count($slider = \App\Models\Setting::where('type', 4)->get()) > 0)
                @foreach($slider as $slide)
                    <div class="swiper-slide dark" style="background-image: url('{{asset('storage/'.$slide->optional)}}'); background-size: cover">
                        @if($slide->title)
                        <div class="container clearfix slider-content">
                            <div class="slider-caption top-left center">
                                <h2 class="font-primary nott" style="    background-color: transparent;">{{$slide->title}}</h2>
                                <p class="t300 font-primary d-none d-sm-block">{{$slide->value}}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>