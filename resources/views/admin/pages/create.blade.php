@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Pages(), ['route' => ['pages.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
    @include('admin.pages.form', [$button = trans('Save')])
    {!! Form::close() !!}
@stop

@section('css')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@stop
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();
        });
    </script>
@stop