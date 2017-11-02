@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($result = new \App\Models\Truck(), ['route' => ['trucks.store'], 'method' => 'POST', 'class' => ' form-horizontal', 'novalidate']) !!}
            @include('admin.truck.form', [$button = trans('truck.save')])
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
                var place = locationcomplete.getPlace();
                document.getElementById("location_lat").value = place.geometry.location.lat();
                document.getElementById("location_lng").value = place.geometry.location.lng();
            });
            var destination = document.getElementById('destination');
            var destinationcomplete = new google.maps.places.Autocomplete(destination, options);

            destinationcomplete.addListener('place_changed', function () {
                var place = destinationcomplete.getPlace();
                document.getElementById("destination_lat").value = place.geometry.location.lat();
                document.getElementById("destination_lng").value = place.geometry.location.lng();
            });
        }

        google.maps.event.addDomListener(window, 'load', initDestination);
    </script>
@stop