<div class="block-content">
    <div class="text-center hgroup">
        @if(count($statements = \App\Models\Setting::where('type',3)->get()) > 0)
            @foreach($statements as $statement)
                <h1>{{$statement->getTranslation(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())->value}}</h1>
            @endforeach
        @else
            <h1>OUR SERVICES</h1>
            <h2>Max Logistics helps companies, to make their collaboration: fast, secure and cheap, <br> by our
                consulting
                office and Online platform.
            </h2>
        @endif
    </div>
    <div class="row">
        @if(count($services = \App\Models\Setting::where('type',7)->get()) > 0)
            <div class="row column-info block-content">
            @foreach($services as $service)
                    <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="3.3s">
                        <img src="{{asset('storage/'.$service->optional)}}" alt="Img">
                        <span></span>
                        <h3>{{$service->getTranslation(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())->title}}</h3>
                        <p>{{$service->getTranslation(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale())->value}}</p>
                        {{--<h3>{{$service->title}}</h3>--}}
                        {{--<p>{{$service->content}}</p>--}}
                </div>
            @endforeach
            </div>
        @else
            <div class="row column-info block-content">
                <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="3.3s">
                    <img src="{{asset('client/img/service1.jpg')}}" style="height:218px" alt="Img">
                    <span></span>
                    <h3>LOGISTIC SERVICES ACCROSS EUROPE</h3>
                    <p> Logistics partners play a dominant role as key stakeholders in the transportation and logistics
                        industry. </p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="3.3s">
                    <img src="{{asset('client/img/service2.jpg')}}" style="height:218px" alt="Img">
                    <span></span>
                    <h3>SAFE & SECURE DELIVERY</h3>
                    <p>Track your freight by personalized GPS, Save Time and Reduce costs using our online platform.
                    </p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="3.3s">
                    <img src="{{asset('client/img/service3.jpg')}}" style="height:218px" alt="Img">
                    <span></span>
                    <h3>SIMPLIFY LOGISTICS MANAGEMENT</h3>
                    <p>We choose only serious companies to make your collaboration as simple as possible, being beacked
                        by a structured team that analyzes the best way for you.
                    </p>
                </div>
            </div>
        @endif
    </div>
</div>