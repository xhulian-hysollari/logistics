@extends('admin.admin')

@section('content')
    {!! Form::model($results = new \App\Models\Truck(), ['route' => ['truck.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
        @include('admin.truck.form', [$button = trans('truck.save')])
    {!! Form::close() !!}
@stop