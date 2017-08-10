@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['partner.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('admin.partners.form')
    {!! Form::close() !!}

@stop