@extends('client.client')

@section('content')
    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            {!! Form::model($result = new \App\Models\Truck(), ['route' => ['truck.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
            @include('client.truck.form', [$button = trans('truck.save')])
            {!! Form::close() !!}
        </div>
    </div>
@stop