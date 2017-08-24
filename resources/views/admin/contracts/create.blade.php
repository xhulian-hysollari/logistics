@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Contracts(), ['route' => ['contracts.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
        @include('admin.contracts.form', [$button = trans('Save')])
    {!! Form::close() !!}
@stop