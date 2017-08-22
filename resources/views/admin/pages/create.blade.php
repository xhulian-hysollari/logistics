@extends('admin.admin')

@section('content')
    {!! Form::model($results = new \App\Pages(), ['route' => ['pages.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
    @include('admin.pages.form', [$button = trans('Save')])
    {!! Form::close() !!}
@stop