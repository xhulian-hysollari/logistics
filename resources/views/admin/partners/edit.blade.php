@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['partner.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate', 'enctype' => 'multipart/form-data']) !!}
    @include('admin.partners.form')
    {!! Form::close() !!}

@stop