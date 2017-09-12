@extends('admin.admin')

@section('content')
    @foreach($conversations as $conversation)
        {{$conversation->messages}}
    @endforeach
@stop
