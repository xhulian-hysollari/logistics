@extends('layout.index')

@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Subscribe</h1>
            <span>Max Logistics Subscription Plans</span>
        </div>

    </section><!-- #page-title end -->
    <section class="section pricing-section dark notopmargin" style="background-color: #333;">

        <div class="container clearfix">
            <div class="pricing pricing--sonam">
                @foreach ($results as $plan)
                    <div class="pricing--item">
                        <h3 class="pricing--title">{{ $plan->name }}</h3>
                        <div class="pricing--price">{{$plan->cost}}<span class="pricing--currency">&euro;</span></div>
                        <p class="pricing--sentence">{{$plan->duration}} {{str_plural($plan->duration_type)}}</p>
                        <ul class="pricing--feature-list">
                            <li>{{$plan->freight_listing}} Freight Listings</li>
                            <li>{{$plan->truck_listing}} Truck Listings</li>
                            <li>{{$plan->tender_listing}} Tender Listings</li>
                            <li>Ads: {{$plan->ads}} </li>
                            @if($plan->free_chat)
                                <li> Free Chat</li>@endif
                            @if($plan->route_planning)
                                <li> Route Planning</li>@endif
                            @if($plan->free_assistance)
                                <li> Free Assistance from logistics agents</li>@endif
                        </ul>
                        @if(Sentinel::getUser())
                            @if (!Sentinel::getUser()->subscribedToPlan($plan->braintree_plan, 'main'))
                                <a class="pricing--action" href="{{ route('selected.plan', [$plan->slug]) }}">Choose
                                    Plan</a>
                            @endif
                        @else
                            <a class="pricing--action" href="{{ route('selected.plan', [$plan->slug]) }}">Choose
                                Plan</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('new/css/components/pricing-table.css')}}" type="text/css"/>
    <style>
        .pricing-table {
            -webkit-box-shadow: 0px 0px 3px #26292e;
            box-shadow: 0px 0px 3px #26292e;
            display: inline-block;
            margin: 30px 10px;
            width: 250px;
        }

        .featured {
            -webkit-transform: scale(1.1, 1.1);
            -moz-transform: scale(1.1, 1.1);
            -ms-transform: scale(1.1, 1.1);
            -o-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
        }

        .pricing-table-header {
            background: #5bc0de; /* Old browsers */
            background: -moz-linear-gradient(top, #5bc0de 0%, #5bc0de 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5bc0de), color-stop(100%, #5bc0de)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #5bc0de 0%, #5bc0de 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #5bc0de 0%, #5bc0de 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #5bc0de 0%, #5bc0de 100%); /* IE10+ */
            background: linear-gradient(to bottom, #5bc0de 0%, #5bc0de 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#5bc0de', GradientType=0); /* IE6-9 */
            background-color: #5bc0de;
            padding: 16px;
            text-align: center;
        }

        .pricing-table-header h1 {
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
        }

        .pricing-table-content {
            background-color: #fff;
        }

        .pricing-table-content ul {
            list-style: none;
        }

        .pricing-table-content ul li {
            border-bottom: 1px solid #efeff0;
            font-size: 14px;
            padding: 15px;
        }

        .pricing-table-footer {
            background-color: #f5f7f8;
            -webkit-border-radius: 0px 0px 5px 5px;
            -moz-border-radius: 0px 0px 5px 5px;
            border-radius: 0px 0px 5px 5px;
            padding: 16px 0;
        }

        .pricing-table-footer {
            text-align: center;
        }

        .pricing-table-footer p {
            font-size: 12px;
            text-transform: uppercase;
        }

        .pricing-table-footer a {
            background: #50b7e4; /* Old browsers */
            background: -moz-linear-gradient(top, #50b7e4 0%, #3098c4 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #50b7e4), color-stop(100%, #3098c4)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #50b7e4 0%, #3098c4 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #50b7e4 0%, #3098c4 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #50b7e4 0%, #3098c4 100%); /* IE10+ */
            background: linear-gradient(to bottom, #50b7e4 0%, #3098c4 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#50b7e4', endColorstr='#3098c4', GradientType=0); /* IE6-9 */
            background-color: #3ea6d2;
            border: 1px solid #1481b0;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            color: #fff;
            display: inline-block;
            font-weight: bold;
            margin-top: 10px;
            padding: 10px;
            text-decoration: none;
        }
    </style>
@stop