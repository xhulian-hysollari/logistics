@extends('layout.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="fancy-title title-bottom-border"><h3>{{ $plan->name }}</h3></div>
            <ul class="iconlist iconlist-color nobottommargin" style="list-style:none">
                <li><i class="icon-ok"></i>Price: {{$plan->cost}}</li>
                <li><i class="icon-ok"></i>Duration: {{$plan->duration}} ({{$plan->public_duration}})</li>
                <li><i class="icon-ok"></i>{{$plan->freight_listing}} Freight Listings</li>
                <li><i class="icon-ok"></i>{{$plan->truck_listing}} Truck Listings</li>
                <li><i class="icon-ok"></i>{{$plan->tender_listing}} Tender Listings</li>
                <li><i class="icon-ok"></i>{{$plan->ads}} Hour Ads</li>
                <li>@if($plan->free_chat)<i class="icon-ok"></i> Free Chat @endif</li>
                <li>@if($plan->route_planning)<i class="icon-ok"></i> Route Planning @endif</li>
                <li>@if($plan->free_assistance)<i class="icon-ok"></i> Free Assistance from logistics agents @endif</li>
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
            <input type="checkbox" id="tos"> By continuing with the subscription I declare that I have read and
            accepted the
            <a href=""></a>
            <a href="{{route('paypal.redirect', ['plan_id' => $plan->plan_id])}}"
               class="button button-small button-3d nomargin">Paypal</a>
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