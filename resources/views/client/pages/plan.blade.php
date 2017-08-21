@extends('client.client')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $plan->name }}</div>
                    <div class="panel-body">
                        {{$plan->description}}
                        <form action="{{ route('user.subscribe') }}" method="post">
                            {{ csrf_field() }}
                            <div id="dropin-container"></div>
                            <hr>
                            <input type="text" class="hidden" name="plan" value="{{ $plan->id }}">

                            <button id="payment-button" class="btn btn-primary btn-flat hidden" type="submit">Pay now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="//js.braintreegateway.com/js/braintree-2.30.0.min.js"></script>
    <script>
        $.ajax({
            url: '{{ url('braintree/token') }}'
        }).done(function (response) {
            braintree.setup(response.data.token, 'dropin', {
                container: 'dropin-container',
                onReady: function () {
                    $('#payment-button').removeClass('hidden');
                }
            });
        });
    </script>
@stop