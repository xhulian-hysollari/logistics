@extends('admin.admin')

@section('content')
    <a href="{{route('trucks.create')}}" class="btn btn-success pull-right" style="margin-bottom: 20px"> <i class="fa fa-plus"></i>
        Create
        new</a>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>{{trans('truck.plate')}}</th>
                            <th>{{trans('truck.type')}}</th>
                            <th>{{trans('truck.location')}}</th>
                            <th>{{trans('truck.status')}}</th>
                            <th>{{trans('truck.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results))
                            @foreach($results as $truck)
                                <tr class="table-row">
                                    <td>{{$truck->plate}}</td>
                                    <td>{{$truck->type}}</td>
                                    <td>{{$truck->location}}</td>
                                    <td>{{$truck->status}}</td>
                                    <td><a href="{{route('trucks.edit', $truck->id)}}"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a></td>
                                <tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">{{trans('truck.no_result')}}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop