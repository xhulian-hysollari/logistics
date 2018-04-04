@extends('layout.index')

@section('content')
    <div class="container">
        <div class="row">
                <div class="col_half">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Company: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->company}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Email: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->email}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Phone: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->telephone}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Mobile: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->mobile}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Fax: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->fax}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half col_last">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Representative: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->full_name}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Skype: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->skype}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Company Website: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->website}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Languages Spoken: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->languages}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Description: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->owner->profile->about_me}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class="col_half">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Freight ID: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->freight_id}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Required Truck Type: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->type}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Dimensions: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                L: {{$result->length}}, H: {{$result->height}}, W: {{$result->weight}},
                                V: {{$result->volume}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Loading: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->loading}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Unloading: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->unloading}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Quantity: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->quantity}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin-sm">
                                <label class="control-label">Description: </label>
                            </div>
                            <div class="col_full nobottommargin-sm">
                                {{$result->description}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half col_last">
                    <div id="location-map" style="height: 300px; width: 100%; color:red"></div>
                </div>
        </div>
    </div>

    @if(Sentinel::check())
        @if(Sentinel::getUser()->id != $result->owner->id)
            <div class="container-fluid block-content">
                <div class="row main-grid">
                    <form action="{{route('freight.bid', $result->id)}}" method="post" enctype="multipart/form-data">
                        @include('client.partials.bid')
                    </form>
                </div>
            </div>
        @endif
    @else
        <div class="container-fluid block-content">
            <div class="row main-grid">
                <form action="{{route('freight.bid', $result->id)}}" method="post" enctype="multipart/form-data">
                    @include('client.partials.bid')
                </form>
            </div>
        </div>
    @endif
@stop

@section('js')
    <script>
        function initMap() {
            // Create a map object and specify the DOM element for display.
            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;

            var map = new google.maps.Map(document.getElementById('location-map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });


            directionsDisplay.setMap(map);
            calculateAndDisplayRoute(directionsService, directionsDisplay);

            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                directionsService.route({
                    origin: '{{$result->loading}}',
                    destination: '{{$result->unloading}}',
                    travelMode: 'DRIVING'
                }, function(response, status) {
                    if (status === 'OK') {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&callback=initMap"
            async defer></script>
@stop

