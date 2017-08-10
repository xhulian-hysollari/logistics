<div class="partners block-content">
    <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.3s">
        <h1>{{trans('sections.partners')}}</h1>
    </div>
    <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true"
         data-min450="2" data-min600="2" data-min768="4">

        @if(count($partners = \App\Models\Partner::all()) > 0)
            @foreach($partners as $partner)
                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="{{$partner->website}}"><img
                                src="{{asset($partner->logo)}}" alt="Img"></a></div>
            @endforeach
        @else
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img style="width: 100%; height:118px  "
                                                                             src="{{asset('client/img/partner1.jpg')}}"
                                                                             alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img style="width: 100%; height:118px  "
                                                                             src="{{asset('client/img/partner2.jpg')}}"
                                                                             alt="Img"></a></div>
            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img style="width: 100%; height:118px "
                                                                             src="{{asset('client/img/partner3.jpg')}}"
                                                                             alt="Img"></a></div>
        @endif

    </div>
</div>