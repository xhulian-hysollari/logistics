@extends('admin.admin')

@section('content')
    {!! Form::model($results = new \App\Models\Freight(), ['route' => ['freight.store'], 'method' => 'POST', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.freight.form', [$button = trans('freight.save')])
    {!! Form::close() !!}
@stop