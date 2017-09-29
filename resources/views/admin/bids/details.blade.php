@extends('admin.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Personal Details</h2>

            <h4>
                {{$details->full_name}}</h4>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div>
                    <p>
                        <i class="fa fa-envelope"></i> {{$details->email}}
                        <br/>
                        <i class="fa fa-phone"></i> {{$details->profile->telephone}}
                        <br/>
                        <i class="fa fa-skype"></i> {{$details->profile->skype}}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div>
                    <p>
                        <i class="fa fa-phone"></i> {{$details->profile->telephone}}
                        <br/>
                        <i class="fa fa-fax"></i> {{$details->profile->fax}}
                        <br/>
                        <i class="fa fa-globe"></i><a
                                href="{{$details->profile->website}}">{{$details->profile->website}}</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row main-grid">
                <h2>Item Details</h2>
                <div class="col-sm-12">
                    @if($bid->truck_id != null)
                        <div>
                            <div class="col-sm-12">
                                <label>{{trans('freight.description')}}</label>
                                <label>{{$bid->item->description}}</label>
                            </div>
                            <div class="col-md-6">
                                <div class="default-inp">
                                    <label>{{trans('truck.height')}}</label>
                                    <label>{{$bid->item->height}}</label>
                                </div>
                                <div class="default-inp">
                                    <label>{{trans('truck.length')}}</label>
                                    <label>{{$bid->item->length}}</label>
                                </div>
                                <div class="default-inp">
                                    <label>{{trans('truck.lorry_type')}}</label>
                                    <label>{{$bid->item->type}}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="default-inp">
                                    <label>{{trans('truck.weight')}}</label>
                                    <<label>{{$bid->item->weight}}</label>
                                </div>
                                <div class="default-inp">
                                    <label>{{trans('truck.plate')}}</label>
                                    <label>{{$bid->item->plate}}</label>
                                </div>
                                <div class="default-inp">
                                    <label>{{trans('truck.location')}}</label>
                                    <label>{{$bid->item->location}}</label>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($bid->freight_id != null)
                        <div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Freight ID: </label>
                                        </div>
                                        <div class="col-md-8">
                                            {{$bid->item->freight_id}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Required Truck Type: </label>
                                        </div>
                                        <div class="col-md-8">
                                            {{$bid->item->type}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Dimensions: </label>
                                        </div>
                                        <div class="col-md-8">
                                            L: {{$bid->item->length}}, H: {{$bid->item->height}},
                                            W: {{$bid->item->weight}},
                                            V: {{$bid->item->volume}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Current Location: </label>
                                        </div>
                                        <div class="col-md-8">
                                            {{$bid->item->location}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Quantity: </label>
                                        </div>
                                        <div class="col-md-8">
                                            {{$bid->item->quantity}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Description: </label>
                                        </div>
                                        <div class="col-md-8">
                                            {{$bid->item->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($bid->contract_id != null)
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>Contract Title </label>
                                    </div>
                                    <div class="col-md-8">
                                        {{$bid->item->title}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>Application Deadline </label>
                                    </div>
                                    <div class="col-md-8">
                                        {{\Carbon\Carbon::parse($bid->item->deadline)->format('d M Y')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label>Contract Duration: </label>
                                    </div>
                                    <div class="col-md-8">
                                        {{$bid->item->duration}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Description: </label>
                                    </div>
                                    <div class="col-md-12">
                                        {{$bid->item->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Requirements: </label>
                                    </div>
                                    <div class="col-md-12">
                                        {{$bid->item->requirements}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row main-grid">
                <h2>Bid Info</h2>
                <div class="col-sm-12">
                    {{$bid->description}}
                </div>
                <div class="col-sm-12">
                    @if(count($bid->files) > 0)
                        Attachments: <br>
                        @foreach($bid->files as $file)
                            <div style="padding: 10px 20px;">
                                <i class="fa fa-file-archive-o"></i> <a href="{{asset('storage/'.$file->path)}}"
                                                                        target="_blank">View Attachment</a>
                                <br>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @if(Sentinel::getUser()->id == $bid->owner_id && $bid->status != 1)
                <a href="{{route('bid.refuse', $bid->id)}}" class="btn btn-danger"> Refuse bid</a>
                <a href="{{route('bid.accept', $bid->id)}}" class="btn btn-success"> Accept bid</a>
                <hr>
                <div class="row main-grid">
{{--                    <form action="{{route('bid.reply', ['id' => null, 'receiver_id' => $bid->user_id])}}" class="form" method="post">--}}
{{--                    @include('client.bid.form')--}}
                    {{--</form>--}}
                </div>
            @endif
        </div>
    </div>
@stop