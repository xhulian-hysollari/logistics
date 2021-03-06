@extends('client.client')

@section('content')
    <div class="container-fluid">
        <div class="row" style="display: flex; justify-content: center; flex-wrap: wrap">
            @foreach ($results as $plan)
                <div class="pricing-table" style="display: flex; flex-direction: column;">
                    <div class="pricing-table-header">
                        <h1>{{ $plan->name }}</h1>
                    </div>
                    <div class="pricing-table-content">
                        <ul style="padding: 0;">
                            <li>Price: {{$plan->cost}}</li>
                            <li>Duration: {{$plan->duration}} ( {{str_plural($plan->duration_type)}})</li>
                            <li>{{$plan->freight_listing}} Freight Listings</li>
                            <li>{{$plan->truck_listing}} Truck Listings</li>
                            <li>{{$plan->tender_listing}} Tender Listings</li>
                            <li>Ads: {{$plan->ads}} </li>
                            <li>@if($plan->free_chat) Free Chat @endif</li>
                            <li>@if($plan->route_planning) Route Planning @endif</li>
                            <li>@if($plan->free_assistance) Free Assistance from logistics agents @endif</li>
                        </ul>
                    </div>
                    <div class="pricing-table-footer" style="margin: auto 0 0 0">
                        <span style="font-size: 16pt; font-weight: bold"><sup>	&euro;</sup>{{ number_format($plan->cost, 2) }}</span>
                        <p>{{$plan->duration}} {{strtoupper(str_plural($plan->duration_type))}}</p>
                        @if(Sentinel::getUser())
                            @if (!Sentinel::getUser()->subscribedToPlan($plan->braintree_plan, 'main'))
                                <a href="{{ route('selected.plan', [$plan->slug]) }}">Choose Plan</a>
                            @endif
                        @else
                            <a href="{{ route('selected.plan', [$plan->slug]) }}">Choose Plan</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('css')
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
            background: -moz-linear-gradient(top,  #5bc0de 0%, #5bc0de 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5bc0de), color-stop(100%,#5bc0de)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  #5bc0de 0%,#5bc0de 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  #5bc0de 0%,#5bc0de 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  #5bc0de 0%,#5bc0de 100%); /* IE10+ */
            background: linear-gradient(to bottom,  #5bc0de 0%,#5bc0de 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5bc0de', endColorstr='#5bc0de',GradientType=0 ); /* IE6-9 */
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
            background: -moz-linear-gradient(top,  #50b7e4 0%, #3098c4 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#50b7e4), color-stop(100%,#3098c4)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  #50b7e4 0%,#3098c4 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  #50b7e4 0%,#3098c4 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  #50b7e4 0%,#3098c4 100%); /* IE10+ */
            background: linear-gradient(to bottom,  #50b7e4 0%,#3098c4 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#50b7e4', endColorstr='#3098c4',GradientType=0 ); /* IE6-9 */
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