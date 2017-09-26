@extends('admin.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::model($result, ['route' => ['trucks.update',  $result->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'novalidate']) !!}
            @include('admin.truck.form', [$button = trans('truck.update')])
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&libraries=places"></script>
    <script>
        function initDestination() {
            var options = {};

            var location = document.getElementById('location');
            var locationcomplete = new google.maps.places.Autocomplete(location, options);


            locationcomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById("location_lat").value = place.geometry.location.lat();
                document.getElementById("location_lng").value = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initDestination);
    </script>
@stop