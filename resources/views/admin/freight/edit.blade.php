@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($results, ['route' => ['freight.update',  $results->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
            @include('admin.freight.form', [$button = trans('freight.update')])
            {!! Form::close() !!}
        </div>
    </div>
@stop
