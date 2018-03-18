@if(count($partners = \App\Models\Partner::all()) > 0)
    <div class="section nomargin clearfix" style="padding: 80px 0">
        <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="0"
             data-nav="false" data-pagi="false" data-loop="true" data-autoplay="3000" data-items-xs="2"
             data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
            @foreach($partners as $partner)
                <div class="oc-item"><a href="{{$partner->website}}" target="_blank"><figure style="margin: 0; background-image: url('{{asset('storage/'.$partner->logo)}}'); background-position: center center; background-repeat: no-repeat; background-size: cover; width:100%; height: 250px;"></figure></a></div>
            @endforeach
        </div>
    </div>
@endif