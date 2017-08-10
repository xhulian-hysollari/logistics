@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::check())
                @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::inRole('truck'))
                    <a href="{{route('truck.create')}}" class="btn btn-info"><i
                                class="fa fa-plus"></i>{{trans('truck.add')}}</a>
                @endif
            @endif
            <div class="col-sm-12">
                <table class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>{{trans('truck.plate')}}</th>
                        <th>{{trans('truck.type')}}</th>
                        <th>{{trans('truck.location')}}</th>
                        <th>{{trans('truck.status')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($results))
                        @if(count($results) > 0)
                            <tr class="table-row">
                                @foreach($results as $truck)
                                    <td>{{$truck->plate}}</td>
                                    <td>{{$truck->type}}</td>
                                    <td>{{$truck->location}}</td>
                                    <td>{{$truck->status}}</td>
                                    <td><a href="{{route('truck.show', $truck->id)}}"><i
                                                    class="fa fa-eye fa-2x"></i></a>
                                    </td>
                            @endforeach
                            <tr>
                        @else
                            <tr>
                                <td colspan="5">{{trans('truck.no_results')}}</td>
                            </tr>
                        @endif
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop