@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Truck(), ['route' => ['trucks.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
        @include('admin.truck.form', [$button = trans('truck.save')])
    {!! Form::close() !!}
@stop