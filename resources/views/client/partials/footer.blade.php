<footer>
    <div class="color-part"></div>
    <div class="container-fluid">
        <div class="row block-content">
            <div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="footer-icons">
                    @if(count($social = \App\Models\Setting::where('type',1)->get()) > 0)
                        @foreach($social as $links)
                            <a href="{{$links->value}}" target="_blank"><i
                                        class="fa fa-{{$links->title}}-square fa-2x"></i></a>
                        @endforeach
                    @endif
                </div>
                <a href="{{route('register')}}" class="btn btn-lg btn-danger">{{trans('navigation.register')}}</a>
            </div>
            @if($pages = \App\Models\Pages::all())
                <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    <h4>{{trans('navigation.service')}}</h4>
                    <nav>
                        @foreach($pages as $page)
                            <a href="{{route('pages', [$page->slug])}}">{{$page->page_title}}</a>
                        @endforeach

                    </nav>
                </div>
            @endif
            <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                <h4>{{trans('navigation.main')}}</h4>
                <nav>
                    <a href="{{route('home')}}">{{trans('navigation.home')}}</a>
                    <a href="{{route('freight')}}">{{trans('navigation.freight')}}</a>
                    <a href="{{route('truck')}}">{{trans('navigation.truck')}}</a>
                    <a href="{{route('contact')}}">{{trans('navigation.contact')}}</a>
                </nav>
            </div>
            <div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                <h4>{{trans('navigation.contact')}}</h4>
                <div class="contact-info">
                    <span><strong>Max LOGISTICS LTD.</strong></span>
                    @if(count($contacts = \App\Models\Setting::where('type',0)->get()) > 0)
                        @foreach($contacts as $contact)
                            <span><i class="fa fa-{{trans('settings.icon_'.$contact->title)}}"></i> {{$contact->value}}</span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>Powered by
            <a href="https://inovap.com" target="_blank">Inovap</a> &copy; 2017 All rights reserved.
        </div>
    </div>
</footer>