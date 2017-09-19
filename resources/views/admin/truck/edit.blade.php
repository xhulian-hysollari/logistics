@extends('admin.admin')

@section('content')
    {!! Form::model($result, ['route' => ['trucks.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-inline', 'novalidate']) !!}
        @include('admin.truck.form', [$button = trans('truck.update')])
    {!! Form::close() !!}
@stop

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&libraries=places"></script>
    <script>
        function initDestination() {
            var options = {
            };

            var location = document.getElementById('location');
            var locationcomplete = new google.maps.places.Autocomplete(location, options);
        }
        google.maps.event.addDomListener(window, 'load', initDestination);
    </script>
@stop