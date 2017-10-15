@extends('admin.admin')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="row">
            <a href="{{route('freight.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin: 20px"> <i
                        class="fa fa-plus"></i>
                Create
                new</a></div>
            <div class="card-body">
                <div class="container-fluid" style="background-color: rgba(136,136,136,0.17); padding: 30px">
                    <div class="row form-elem">
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-loading" placeholder="From"/>
                            </div>
                        </div>
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-unloading" placeholder="To"/>
                            </div>
                        </div>
                    </div>
                    <div class="row form-elem">
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-volume" placeholder="Search volume"/>
                            </div>
                        </div>
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-type" placeholder="Search type"/>
                            </div>
                        </div>
                    </div>
                    <div class="row form-elem">
                        <div class="col-sm-12 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-listed" placeholder="Search listing time"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th><i class="fa fa-map-marker"></i> Place of loading</th>
                            <th><i class="fa fa-map-marker"></i> Place of unloading</th>
                            <th><i class="fa fa-cube"></i> {{trans('freight.volume')}}</th>
                            <th><i class="fa fa-truck"></i> {{trans('freight.lorry_type')}}</th>
                            <th><i class="fa fa-clock-o"></i> Listed at</th>
                            <th style="display: none">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $freight)
                            <tr>
                                <td>{{$freight->loading}}</td>
                                <td>{{$freight->unloading}}</td>
                                <td>{{$freight->volume}}</td>
                                <td>{{$freight->type}}</td>
                                <td>{{\Carbon\Carbon::parse($freight->created_at)->diffForHumans()}}</td>
                                <td><a href="{{route('freight.show', $freight->id)}}"><i class="fa fa-eye fa-2x"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop