@extends('admin.admin')

@section('content')
    {!! Form::model($results = new \App\Models\Freight(), ['route' => ['freight.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
        @include('admin.freight.form', [$button = trans('freight.save')])
    {!! Form::close() !!}
@stop

@section('css')
    <style>
        .col-md-6{
            padding: 15px;
        }
    </style>
@endsection