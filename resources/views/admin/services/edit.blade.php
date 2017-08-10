@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['service.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('admin.services.form')
    {!! Form::close() !!}

@stop