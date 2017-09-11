@extends('admin.admin')

@section('content')
    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div>
                        <h4>
                            {{$details->full_name}}</h4>
                        <p>
                            <i class="fa fa-envelope"></i> {{$details->email}}
                            <br/>
                            <i class="fa fa-phone"></i> {{$details->phone}}<br/>
                            <i class="fa fa-skype"></i> {{$details->skype}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div>
                        <div>
                            <h4>
                                {{$details->profile->name}}</h4>
                            <p>
                                <i class="fa fa-envelope"></i> {{$details->profile->email}}
                                <br/>
                                <i class="fa fa-phone"></i> {{$details->profile->telephone}}
                                <br/>
                                <i class="fa fa-fax"></i> {{$details->profile->fax}}
                                <br/>
                                <i class="fa fa-globe"></i><a
                                        href="{{$details->profile->website}}">{{$details->profile->website}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row main-grid">
            <div class="col-sm-12">
                <div class="well well-sm clearfix">
                    <div>
                        {{--<div class="col-sm-12">--}}
                            {{--<label>{{trans('freight.description')}}</label>--}}
                            {{--<label>{{$bid->description}}</label>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.height')}}</label>--}}
                                {{--<label>{{$bid->height}}</label>--}}
                            {{--</div>--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.length')}}</label>--}}
                                {{--<label>{{$bid->length}}</label>--}}
                            {{--</div>--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.lorry_type')}}</label>--}}
                                {{--<label>{{$bid->type}}</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.weight')}}</label>--}}
                                {{--<<label>{{$bid->weight}}</label>--}}
                            {{--</div>--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.plate')}}</label>--}}
                                {{--<label>{{$bid->plate}}</label>--}}
                            {{--</div>--}}
                            {{--<div class="default-inp">--}}
                                {{--<label>{{trans('truck.location')}}</label>--}}
                                {{--<label>{{$bid->location}}</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <hr>
        {{--<div class="row main-grid">--}}
            {{--{!! Form::model($bid = new \App\Models\Bid(), ['route' => ['bid.freight', $bid->id, 0], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}--}}
            {{--@include('client.bid.form')--}}
            {{--{!! Form::close() !!}--}}
        {{--</div>--}}
    </div>
@stop