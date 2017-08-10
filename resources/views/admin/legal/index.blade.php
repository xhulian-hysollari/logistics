@extends('admin.admin')

@section('content')

    <div class="row">
        <div class="pull-right">
            <a href="{{route('legal.add')}}" class="btn btn-info"><i class="fa fa-plus"></i> {{trans('legal.add')}}</a>
        </div>
    </div>
    <table class="table table-responsive table-striped">
        <thead>
        <tr>
            <th>{{trans('legal.id')}}</th>
            <th>{{trans('legal.title')}}</th>
            <th>{{trans('legal.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @if(count($results) > 0)
            <tr>
                @foreach($results as $result)
                    <td>{{$result->id}}</td>
                    <td>{{$result->title}}</td>
                    <td><a href="#" class="btn btn-info" style="margin-right: 5px"><i class="fa fa-eye"></i></a><a
                                href="{{route('legal.edit', $result->id)}}" class="btn btn-info"
                                style="margin-right: 5px"><i
                                    class="fa fa-edit"></i></a><a href="{{route('legal.delete', $result->id)}}"
                                                                  class="btn btn-info" style="margin-right: 5px"><i
                                    class="fa fa-trash"></i></a></td>
                @endforeach
            </tr>
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