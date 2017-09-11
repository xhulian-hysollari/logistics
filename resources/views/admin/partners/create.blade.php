@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Partner(), ['route' => ['partner.store'], 'method' => 'POST', 'novalidate', 'enctype' => 'multipart/form-data']) !!}
    @include('admin.partners.form')
    {!! Form::close() !!}
@stop