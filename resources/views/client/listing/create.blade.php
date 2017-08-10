@extends('client.client')

@section('content')
    {!! Form::model($result = new \App\Models\Listing(), ['route' => ['listing.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('client.listing.form')
    {!! Form::close() !!}
@stop