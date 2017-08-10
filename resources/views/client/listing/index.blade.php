@extends('client.client')

@section('content')
    @if(isset($results))
        @foreach($results as $result)

        @endforeach
    @endif
@stop