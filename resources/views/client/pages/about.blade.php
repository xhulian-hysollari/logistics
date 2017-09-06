@extends('client.client')
@section('content')
    <div class="container-fluid block-content">
        <div class="row main-grid">
            <div style="text-align: center; margin-bottom:40px;">
                <h2>About Us</h2>
            </div>
            <div>
                @if($about)
                    {!! $about->value !!}
                @endif
            </div>
        </div>
    </div>
@stop