@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h4 class="page-section-heading">Responsive Table</h4>
            <div class="panel panel-default">
                <!-- Progress table -->
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>Registration Date</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody id="responsive-table-body">
                        @if(isset($results))
                            @if(count($results) > 0)
                                @foreach($results as $result)
                                    <tr>
                                        <td><span class="label label-default">{{$result->created_at}}</span></td>
                                        <td>
                                            {{$result->full_name}}
                                        </td>
                                        <td><a href="#">{{$result->email}}</a></td>
                                        <td>{{$result->location}}<a href="#"><i
                                                        class="fa fa-map-marker fa-fw text-muted"></i></a>
                                        </td>
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