@extends('admin.admin')

@section('content')
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('admin.inbox.partials.messages', $thread->messages, 'message')

        @include('admin.inbox.partials.form-message')
    </div>
@stop
