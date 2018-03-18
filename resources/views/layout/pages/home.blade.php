@extends('layout.index')

@section('slider')
    @include('layout.partials.slider')
@stop
@section('content')
    @include('layout.partials.services')
    @include('layout.partials.statistics')
    @include('layout.partials.partners')
@stop