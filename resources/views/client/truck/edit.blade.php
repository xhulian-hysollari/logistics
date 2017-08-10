@extends('client.client')

@section('content')

    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            {!! Form::model($result, ['route' => ['truck.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
            @include('client.truck.form', [$button = trans('truck.update')])
            {!! Form::close() !!}
        </div>
    </div>
@stop