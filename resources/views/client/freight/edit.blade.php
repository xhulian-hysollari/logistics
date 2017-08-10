@extends('client.client')

@section('content')

    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
    {!! Form::model($result, ['route' => ['freight.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('client.freight.form', [$button = trans('freight.update')])
    {!! Form::close() !!}
        </div>
    </div>
@stop