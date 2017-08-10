@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h4 class="page-section-heading">Trucks</h4>
            <div class="panel panel-default">
                <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>{{trans('truck.plate')}}</th>
                            <th>{{trans('truck.type')}}</th>
                            <th>{{trans('truck.location')}}</th>
                            <th>{{trans('truck.status')}}</th>
                            <th>{{trans('truck.owner')}}</th>
                            <th>{{trans('truck.action')}}</th>
                        </tr>
                        </thead>
                        <tbody id="responsive-table-body">
                        @if(isset($results))
                            @if(count($results) > 0)
                                @foreach($results as $truck)
                                    <tr>
                                        <td>{{$truck->plate}}</td>
                                        <td>{{$truck->type}}</td>
                                        <td>{{$truck->location}}</td>
                                        <td>{{$truck->status}}</td>
                                        <td>{{$truck->user->full_name}}</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip"
                                               data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip"
                                               data-placement="top" title="Delete"><i
                                                        class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6"> No results</td>
                                </tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop