@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['legal.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('admin.legal.form')
    {!! Form::close() !!}

@stop