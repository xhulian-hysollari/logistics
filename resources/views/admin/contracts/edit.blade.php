@extends('admin.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::model($result, ['route' => ['contracts.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
            @include('admin.contracts.form', [$button = 'Save Changes'])
            {!! Form::close() !!}
        </div>
    </div>
@stop







