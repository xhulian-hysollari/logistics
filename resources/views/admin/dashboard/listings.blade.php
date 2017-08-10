@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h4 class="page-section-heading">Freights</h4>
            <div class="panel panel-default">
                <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>{{trans('freight.id')}}</th>
                            <th>{{trans('freight.weight')}}</th>
                            <th>{{trans('freight.length')}}</th>
                            <th>{{trans('freight.height')}}</th>
                            <th>{{trans('freight.volume')}}</th>
                            <th>{{trans('freight.lorry_type')}}</th>
                            <th>{{trans('freight.quantity')}}</th>
                            <th>{{trans('freight.owner')}}</th>
                            <th>{{trans('freight.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody id="responsive-table-body">
                        @if(isset($results))
                            @if(count($results) > 0)
                                @foreach($results as $result)
                                    <tr>
                                        <td>{{$result->freight_id}}</td>
                                        <td>{{$result->weight}}</td>
                                        <td>{{$result->length}}</td>
                                        <td>{{$result->height}}</td>
                                        <td>{{$result->volume}}</td>
                                        <td>{{$result->lorry_type}}</td>
                                        <td>{{$result->quantity}}</td>
                                        <td>{{$result->user->full_name}}</td>
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
                                    <td colspan="8"> No results</td>
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