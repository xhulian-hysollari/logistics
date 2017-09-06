<?php $types = ['success', 'error', 'warning', 'info']; ?>

@foreach ($types as $type)
    @if ($message = Session::get($type))
        <?php if ($type === 'error') $type = 'danger'; ?>
        <div class="alert alert-{{ $type }} cms-alert col-md-3 pull-right"
             style="z-index: 999999; position: absolute; right:0; top:100px;">
            <a class="close" data-dismiss="alert">×</a>
            {!! $message !!}
        </div>
    @endif
@endforeach

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <a class="close" data-dismiss="alert">×</a>

        @foreach ($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
    </div>
@endif