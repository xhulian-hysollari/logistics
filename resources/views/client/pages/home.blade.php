@extends('client.client')

@section('slider')
    @include('client.partials.slider')
@stop
@section('content')
    @include('client.partials.services')
    @include('client.partials.statistics')
    @include('client.partials.partners')
@stop