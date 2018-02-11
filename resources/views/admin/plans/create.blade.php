@extends('admin.admin')

@section('content')
    {!! Form::model($result = new \App\Models\Plan(), ['route' => ['paypal.plan'], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="name">Plan Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$result->name}}"
                               placeholder="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="slug">Plan Slug</label>
                        <input type="text" value="{{$result->slug}}" class="form-control" id="slug" name="slug"
                               placeholder="slug" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="cost">Plan Cost</label>
                        <input type="text" id="cost" name="cost" class="form-control" value="{{$result->cost}}"
                               placeholder="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="freight_listing">Number of freight listings</label>
                        <input type="text" value="{{$result->freight_listing}}" class="form-control" id="freight_listing" name="freight_listing"
                               placeholder="0">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="truck_listing">Number of truck listings</label>
                        <input type="text" id="truck_listing" name="truck_listing" class="form-control" value="{{$result->truck_listing}}"
                               placeholder="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="tender_listing">Number of tender listings</label>
                        <input type="text" value="{{$result->tender_listing}}" class="form-control" id="tender_listing" name="tender_listing"
                               placeholder="0">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="ads">Hours of advertisements</label>
                        <input type="text" id="ads" name="ads" class="form-control" value="{{$result->ads}}"
                               placeholder="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="free_chat">Free chat</label>
                        <input type="checkbox" value="1" class="checkbox" id="free_chat" name="free_chat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="route_planning">Route Assistance</label>
                        <input type="checkbox" id="route_planning" name="route_planning" class="checkbox" value="1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="free_assistance">Free assistance</label>
                        <input type="checkbox" value="1" class="checkbox" id="free_assistance" name="free_assistance">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="duration">Duration (number only)</label>
                        <input type="text" id="duration" name="duration" class="form-control" value="{{$result->duration}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="duration_type">Duration Type</label>
                        <select name="duration_type" id="duration_type" class="form-control">
                            <option value="addMonths">Monthly</option>
                            <option value="addYears">Yearly</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop