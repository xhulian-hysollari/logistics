@extends('client.client')

@section('content')

    {!! Form::model($result, ['route' => ['listing.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
    @include('client.listing.form')
    {!! Form::close() !!}
@stop