@extends('admin.admin')

@section('content')
    {!! Form::model($results, ['route' => ['freight.update',  $results->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.freight.form', [$button = trans('freight.update')])
    {!! Form::close() !!}
@stop