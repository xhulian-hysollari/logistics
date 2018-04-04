@extends('layout.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col_half">
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Company: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->company}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Email: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->email}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Phone: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->telephone}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Mobile: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->mobile}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Fax: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->fax}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_half">
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Representative: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->full_name}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Skype: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->skype}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Company Website: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->website}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Languages Spoken: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->languages}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Description: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->owner->profile->about_me}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row main-grid">
            <div class="col_half">
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Truck Plate: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->plate}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Truck Type: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->type}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Dimensions: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            L: {{$result->length}}, H: {{$result->height}}, W: {{$result->weight}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Current Location: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->location}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="bottommargin-sm">
                        <div class="col_full nobottommargin">
                            <label class="control-label">Description: </label>
                        </div>
                        <div class="col_full nobottommargin">
                            {{$result->description}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_half">
                <div id="location-map" style="height: 300px; width: 100%; color:red"></div>
            </div>
        </div>
    </div>

    @if(Sentinel::check())
        @if(Sentinel::getUser()->id != $result->owner->id)
            <div class="container">
                <div class="row">
                    <form action="{{route('truck.bid', $result->id)}}" class="col_half" method="post"
                          enctype="multipart/form-data">
                        @include('client.partials.bid')
                    </form>
                </div>
            </div>
        @endif
    @else
        <div class="container">
            <div class="row">
                <form action="{{route('truck.bid', $result->id)}}" class="col_half" method="post"
                      enctype="multipart/form-data">
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
            var map = new google.maps.Map(document.getElementById('location-map'), {
                center: {lat: parseFloat('{{$result->location_lat}}'), lng: parseFloat('{{$result->location_lng}}')},
                zoom: 12
            });
            var marker = new google.maps.Marker({
                position: {lat: parseFloat('{{$result->location_lat}}'), lng: parseFloat('{{$result->location_lng}}')},
                map: map,
                title: '{{$result->plate}}, {{$result->location}}'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&callback=initMap"
            async defer></script>
@stop