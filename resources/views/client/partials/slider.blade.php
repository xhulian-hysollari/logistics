<div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false"
     data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
    @if(count($slider = \App\Models\Setting::where('type', 4)->get()) > 0)
        @foreach($slider as $slide)
            <div class="item">
                <img src="{{'storage/'.$slide->optional}}" alt="slider">
                <div class="container-fluid">
                    @if($slide->title)
                    <div class="slider-content col-md-6 col-lg-6">
                        <div style="display:table;">
                            <div style="display:table-cell; width:100px; vertical-align:top;">
                                <a class="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div style="display:table-cell;">
                                <h1>{{$slide->title}}</h1>
                                {{--<h1>{{$slide->title}}</h1>--}}
                            </div>
                        </div>
                        <p>{{$slide->value}}</p>
                        {{--<p>{{$slide->value}}</p>--}}
                        {{--<br>--}}
                        {{--<a class="btn btn-success" href="#">LEARN MORE</a></p>--}}
                    </div>
                        @endif
                </div>
            </div>
        @endforeach
    @else
        <div class="item">
            <img src="{{asset('media/main-slider/1.jpg')}}" alt="slider">
            <div class="container-fluid">
                <div class="slider-content col-md-6 col-lg-6">
                    <div style="display:table;">
                        <div style="display:table-cell; width:100px; vertical-align:top;">
                            <a class="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div style="display:table-cell;">
                            <h1>LARGE NUMBER OF FREIGHT WAYS MAKES US POWERFUL</h1>
                        </div>
                    </div>
                    <p>Nunc accumsan metus quis metus. Sed luctus. Mauris eu enim quisque dignissim nequesudm
                        consectetuer dapibus wn eu leo integer varius erat.<br></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{asset('media/main-slider/2.jpg')}}" alt="slider">
            <div class="container-fluid">
                <div class="slider-content col-md-6 col-lg-6">
                    <div style="display:table;">
                        <div style="display:table-cell; width:100px; vertical-align:top;">
                            <a class="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div style="display:table-cell;">
                            <h1>LARGE NUMBER OF FREIGHT WAYS MAKES US POWERFUL</h1>
                        </div>
                    </div>
                    <p>Nunc accumsan metus quis metus. Sed luctus. Mauris eu enim quisque dignissim nequesudm
                        consectetuer dapibus wn eu leo integer varius erat.<br></p>
                </div>
            </div>
        </div>
    @endif
</div>