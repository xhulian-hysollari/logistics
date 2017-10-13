@extends('admin.admin')

@section('content')
    <a href="{{route('trucks.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>{{trans('truck.plate')}}</th>
                            @if(Sentinel::inRole('admin'))
                                <th>Owner</th>
                            @endif
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
                                    @if(Sentinel::inRole('admin'))
                                        <td>{{$truck->owner->full_name}}</td>
                                    @endif
                                    <td>{{$truck->type}}</td>
                                    <td>{{$truck->location}}</td>
                                    <td>{{$truck->status}}</td>
                                    <td>
                                        @if(Sentinel::getUser()->id == $truck->user_id)
                                            <a href="{{ route('trucks.edit', [$truck->id]) }}"><i
                                                        class="fa fa-pencil-square fa-2x"></i></a>
                                            <a href="{{route('trucks.delete', $truck->id)}}"><i
                                                        class="fa fa-trash-o fa-2x"></i></a>
                                        @else
                                            <a href="{{route('trucks.show', $truck->id)}}"><i class="fa fa-eye fa-2x"></i></a>
                                        @endif
                                        @if(Sentinel::inRole('admin') && Sentinel::getUser()->id != $truck->user_id)
                                            <a href="{{route('trucks.delete', $truck->id)}}"><i
                                                        class="fa fa-trash-o fa-2x"></i></a>
                                        @endif
                                    </td>
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