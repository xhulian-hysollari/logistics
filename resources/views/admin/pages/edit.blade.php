@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['pages.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
    @include('admin.pages.form', [$button = 'Save Changes'])
    {!! Form::close() !!}
@stop