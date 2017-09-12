@extends('admin.admin')

@section('content')
    <a href="{{route('service.add')}}" class="btn btn-info"><i class="fa fa-plus"></i> {{trans('service.add')}}
    </a>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>{{trans('services.id')}}</th>
                            <th>{{trans('services.title')}}</th>
                            <th>{{trans('services.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($results) > 0)
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->id}}</td>
                                    <td>{{$result->title}}</td>
                                    <td><a href="#" class="btn btn-info" style="margin-right: 5px"> <i
                                                    class="fa fa-eye"></i></a><a
                                                href="{{route('service.edit', $result->id)}}" class="btn btn-info"
                                                style="margin-right: 5px"> <i
                                                    class="fa fa-edit"></i></a><a
                                                href="{{route('service.delete', $result->id)}}"
                                                class="btn btn-info" style="margin-right: 5px"> <i
                                                    class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">
                                    No results
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop