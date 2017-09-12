@extends('admin.admin')

@section('content')
    @foreach($conversations as $conversation)
        {{$conversation->name}} <br> {{$conversation->messages->message}}
    @endforeach
@stop
