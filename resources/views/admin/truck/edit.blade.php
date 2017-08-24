@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['trucks.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.truck.form', [$button = trans('truck.update')])
    {!! Form::close() !!}
@stop