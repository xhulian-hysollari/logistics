@extends('client.client')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid block-content">
            <div class="row main-grid">
                <div style="text-align: center; margin-bottom:40px;">
                    <h2>{!! $result->page_title !!}</h2>
                </div>
                <div>
                    {!! $result->body !!}
                </div>
            </div>
        </div>
    </div>
@stop