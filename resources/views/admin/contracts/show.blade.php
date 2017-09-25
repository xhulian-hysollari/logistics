@extends('client.client')

@section('content')
    <div class="container-fluid">
        <div class="row main-grid">
            <div class="well clearfix">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Company: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->company}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Email: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->email}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Phone: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->telephone}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Mobile: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->mobile}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Fax: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->fax}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Representative: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->full_name}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Skype: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->skype}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Company Website: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->website}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Languages Spoken: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->languages}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Description: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->owner->profile->about_me}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row main-grid">
            <div class="well clearfix">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Contract Title </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->title}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Application Deadline </label>
                            </div>
                            <div class="col-md-8">
                                {{\Carbon\Carbon::parse($result->deadline)->format('d M Y')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Contract Duration: </label>
                            </div>
                            <div class="col-md-8">
                               {{$result->duration}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Description: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->description}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label">Requirements: </label>
                            </div>
                            <div class="col-md-8">
                                {{$result->requirements}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid block-content">
        <div class="row main-grid">
            <form action="{{route('tender.bid', $result->id)}}" method="post" enctype="multipart/form-data">
                @include('client.partials.bid')
            </form>
        </div>
    </div>
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