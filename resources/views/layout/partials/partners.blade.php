@if(count($partners = \App\Models\Partner::all()) > 0)
    <div class="section nomargin clearfix" style="padding: 80px 0">
        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0"
             data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2"
             data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
            @foreach($partners as $partner)
                <div class="oc-item"><a href="{{$partner->website}}" target="_blank"><img src="{{asset('storage/'.$partner->logo)}}"
                                                      style="height: 24px" alt="Brands"></a></div>
            @endforeach
        </div>
    </div>
@endif