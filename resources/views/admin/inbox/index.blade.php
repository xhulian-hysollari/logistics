@extends('admin.admin')

@section('content')
    @foreach($conversations as $conversation)
        {{$conversation->name}} <br> {{$conversation->messages[0]->message}}
    @endforeach
@stop
