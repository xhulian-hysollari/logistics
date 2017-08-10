@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="pull-right">
            <a href="{{route('service.add')}}" class="btn btn-info"><i class="fa fa-plus"></i> {{trans('service.add')}}
            </a>
        </div>
    </div>
    <table class="table table-responsive table-striped">
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
                    <td><a href="#" class="btn btn-info" style="margin-right: 5px"> <i class="fa fa-eye"></i></a><a
                                href="{{route('service.edit', $result->id)}}" class="btn btn-info"
                                style="margin-right: 5px"> <i
                                    class="fa fa-edit"></i></a><a href="{{route('service.delete', $result->id)}}"
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
@stop