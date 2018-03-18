<div class="masonry-thumbs dark grid-3 clearfix">
    {{--<div class="text-center hgroup">--}}
    {{--@if(count($statements = \App\Models\Setting::where('type',3)->take(3)->get()) > 0)--}}
    {{--@foreach($statements as $statement)--}}
    {{--<h1>{!! $statement->value !!}</h1>--}}
    {{--@endforeach--}}
    {{--@else--}}
    {{--<h1>OUR SERVICES</h1>--}}
    {{--<h2>Max Logistics helps companies, to make their collaboration: fast, secure and cheap, <br> by our--}}
    {{--consulting--}}
    {{--office and Online platform.--}}
    {{--</h2>--}}
    {{--@endif--}}
    {{--</div>--}}
    @if(count($services = \App\Models\Setting::where('type',7)->take(3)->get()) > 0)
        @foreach($services as $service)
            <a href="#">
                <img class="image_fade" src="{{asset('storage/'.$service->optional)}}" alt="Image 1">
                <div class="overlay">
                    <div class="text-overlay">
                        <div class="text-overlay-title">
                            <h3>{{$service->title}}</h3>
                        </div>
                        <div class="text-overlay-meta">
                            <span>{{$service->value}}</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    @endif
</div>