@extends('admin.admin')

@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-9">
                <table class="table table-responsive table-striped">
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
                                <td><a href="{{route('truck.edit', $truck->id)}}"><i
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
@stop