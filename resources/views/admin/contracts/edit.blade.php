@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['contracts.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.contracts.form', [$button = 'Save Changes'])
    {!! Form::close() !!}
@stop