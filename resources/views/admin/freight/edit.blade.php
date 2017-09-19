@extends('admin.admin')

@section('content')
    {!! Form::model($results, ['route' => ['freight.update',  $results->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
        @include('admin.freight.form', [$button = trans('freight.update')])
    {!! Form::close() !!}
@stop

@section('css')
    <style>
        .col-md-6{
            padding: 15px;
        }
    </style>
@endsection