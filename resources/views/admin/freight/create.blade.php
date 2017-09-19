@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($results = new \App\Models\Freight(), ['route' => ['freight.store'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
            @include('admin.freight.form', [$button = trans('freight.save')])
            {!! Form::close() !!}
        </div>
    </div>
@stop