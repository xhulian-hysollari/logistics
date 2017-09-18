@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Ads(), ['route' => ['ads.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
    @include('admin.ads.form', [$button = trans('Save')])
    {!! Form::close() !!}
@stop