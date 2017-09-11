@extends('admin.admin')

@section('content')
    @include('admin.inbox.partials.flash')

    @each('admin.inbox.partials.thread', $threads, 'thread', 'admin.inbox.partials.no-threads')
@stop
