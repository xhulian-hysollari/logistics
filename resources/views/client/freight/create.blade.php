@extends('client.client')

@section('content')
    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
    {!! Form::model($result = new \App\Models\Freight(), ['route' => ['freight.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('client.freight.form', [$button = trans('freight.save')])
    {!! Form::close() !!}
        </div>
    </div>
@stop