@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="padding: 15px;">
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
                    {{--{!! Form::model($bid = new \App\Models\Bid(), ['route' => ['bid.freight', $bid->item->id, 0], 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate']) !!}--}}
                    @include('client.bid.form')
                    {{--{!! Form::close() !!}--}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop