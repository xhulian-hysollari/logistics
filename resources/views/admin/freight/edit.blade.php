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

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&libraries=places"></script>
    <script>
        function initDestination() {
            var options = {
            };

            var loading = document.getElementById('loading');
            var unloading = document.getElementById('unloading');
            var loadcomplete = new google.maps.places.Autocomplete(loading, options);
            var unloadcomplete = new google.maps.places.Autocomplete(unloading, options);
        }
        google.maps.event.addDomListener(window, 'load', initDestination);
    </script>
@stop
