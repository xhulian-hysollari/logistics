@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($result = new \App\Models\Contracts(), ['route' => ['contracts.store'], 'method' => 'POST', 'class' => ' form-inline', 'novalidate']) !!}
            @include('admin.contracts.form', [$button = trans('Save')])
            {!! Form::close() !!}
        </div>
    </div>
@stop