@extends('layout.index')

@section('content')
    <div class="container block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div>
                            <h4>
                                {{$result->user->full_name}}</h4>
                            <p>
                                <i class="fa fa-envelope"></i> {{$result->user->email}}
                                <br/>
                                <i class="fa fa-phone"></i> {{$result->user->phone}}<br/>
                                <i class="fa fa-skype"></i> {{$result->user->skype}}</p>
                        </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="well well-sm">
                    <div>
                        <div>
                            <h4>
                                {{$result->user->company->name}}</h4>
                            <p>
                                <i class="fa fa-envelope"></i> {{$result->user->company->email}}
                                <br/>
                                <i class="fa fa-phone"></i> {{$result->user->company->telephone}}
                                <br/>
                                <i class="fa fa-fax"></i> {{$result->user->company->fax}}
                                <br/>
                                <i class="fa fa-globe"></i><a
                                        href="{{$result->user->company->website}}">{{$result->user->company->website}}</a>
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
                        <div class="col-sm-12">
                            <label>{{trans('freight.description')}}</label>
                            <label>{{$result->description}}</label>
                        </div>
                        <div class="col-md-6">
                            <div class="default-inp">
                                <label>{{trans('truck.height')}}</label>
                                <label>{{$result->height}}</label>
                            </div>
                            <div class="default-inp">
                                <label>{{trans('truck.length')}}</label>
                                <label>{{$result->length}}</label>
                            </div>
                            <div class="default-inp">
                                <label>{{trans('truck.lorry_type')}}</label>
                                <label>{{$result->type}}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="default-inp">
                                <label>{{trans('truck.weight')}}</label>
                                <<label>{{$result->weight}}</label>
                            </div>
                            <div class="default-inp">
                                <label>{{trans('truck.plate')}}</label>
                                <label>{{$result->plate}}</label>
                            </div>
                            <div class="default-inp">
                                <label>{{trans('truck.location')}}</label>
                                <label>{{$result->location}}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row main-grid">
            {!! Form::model($bid = new \App\Models\Bid(), ['route' => ['bid.freight', $result->id, 0], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}
            @include('client.bid.form')
            {!! Form::close() !!}
        </div>
    </div>

@stop