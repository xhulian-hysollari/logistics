@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Service(), ['route' => ['service.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('admin.services.form')
    {!! Form::close() !!}
@stop