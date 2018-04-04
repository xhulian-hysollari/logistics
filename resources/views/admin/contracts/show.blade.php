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
    <div class="container">
        <div class="row">
                <div class="col_half">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin">
                                <label class="control-label">Contract Title </label>
                            </div>
                            <div class="col_full nobottommargin">
                                {{$result->title}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin">
                                <label class="control-label">Application Deadline </label>
                            </div>
                            <div class="col_full nobottommargin">
                                {{\Carbon\Carbon::parse($result->deadline)->format('d M Y')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_half">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col_full nobottommargin">
                                <label class="control-label">Contract Duration: </label>
                            </div>
                            <div class="col_full nobottommargin">
                                {{$result->duration}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_full">
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col-md-12">
                                <label class="control-label">Description: </label>
                            </div>
                            <div class="col-md-12">
                                {{$result->description}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bottommargin-sm">
                            <div class="col-md-12">
                                <label class="control-label">Requirements: </label>
                            </div>
                            <div class="col-md-12">
                                {{$result->requirements}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @if(Sentinel::check())
        @if(Sentinel::getUser()->id != $result->owner->id)
            <div class="container">
                <div class="row">
                    <form action="{{route('contract.bid', $result->id)}}" class="col_half" method="post" enctype="multipart/form-data">
                        @include('client.partials.bid')
                    </form>
                </div>
            </div>
        @endif
    @else
        <div class="container">
            <div class="row">
                <form action="{{route('contract.bid', $result->id)}}" class="col_half" method="post" enctype="multipart/form-data">
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
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiBlCK2sTv0-Dq_V098HVSJ7-lhLV13yU&callback=initMap"
            async defer></script>
@stop