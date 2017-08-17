@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['truck.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.truck.form', [$button = trans('truck.update')])
    {!! Form::close() !!}
@stop