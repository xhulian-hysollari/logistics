@extends('admin.admin')

@section('content')
    {!! Form::model($results = new \App\Contracts(), ['route' => ['contracts.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
        @include('admin.contracts.form', [$button = trans('Save')])
    {!! Form::close() !!}
@stop