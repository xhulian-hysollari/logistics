@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Legal(), ['route' => ['legal.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('admin.legal.form')
    {!! Form::close() !!}
@stop