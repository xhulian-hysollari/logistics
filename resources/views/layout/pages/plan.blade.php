@extends('layout.index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $plan->name }}</div>
                    <div class="panel-body">
                        <ul style="list-style:none">
                            <li>Price: {{$plan->cost}}</li>
                            <li>Duration: {{$plan->duration}} ({{$plan->public_duration}})</li>
                            <li>{{$plan->freight_listing}} Freight Listings</li>
                            <li>{{$plan->truck_listing}} Truck Listings</li>
                            <li>{{$plan->tender_listing}} Tender Listings</li>
                            <li>{{$plan->ads}} Hour Ads</li>
                            <li>@if($plan->free_chat) Free Chat @endif</li>
                            <li>@if($plan->route_planning) Route Planning @endif</li>
                            <li>@if($plan->free_assistance) Free Assistance from logistics agents @endif</li>
                            {{--<form action="{{ route('user.subscribe') }}" method="post">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<div id="dropin-container"></div>--}}
                                {{--<hr>--}}
                                {{--<input type="text" class="hidden" name="plan" value="{{ $plan->id }}">--}}

                                {{--<button id="payment-button" class="btn btn-primary btn-flat hidden" type="submit">Pay--}}
                                    {{--now--}}
                                {{--</button>--}}
                            {{--</form>--}}
                        </ul>
                        <p>{{$plan->description}}</p>
                        <label for="tos"></label>
                        <input type="checkbox" id="tos"> By continuing with the subscription I declare that I have read and accepted the
                        <a href=""></a>
                        <a href="{{route('paypal.redirect', ['plan_id' => $plan->plan_id])}}" class="btn btn-success">Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{--@section('js')--}}
{{--<script src="//js.braintreegateway.com/js/braintree-2.30.0.min.js"></script>--}}
{{--<script>--}}
{{--$.ajax({--}}
{{--url: '{{ url('braintree/token') }}'--}}
{{--}).done(function (response) {--}}
{{--braintree.setup(response.data.token, 'dropin', {--}}
{{--container: 'dropin-container',--}}
{{--onReady: function () {--}}
{{--$('#payment-button').removeClass('hidden');--}}
{{--}--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--@stop--}}