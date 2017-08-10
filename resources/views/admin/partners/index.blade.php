@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="pull-right">
            <a href="{{route('partner.add')}}" class="btn btn-info"><i class="fa fa-plus"></i> {{trans('partner.add')}}
            </a>
        </div>
    </div>
    <table class="table table-responsive table-striped">
        <thead>
        <tr>
            <th>{{trans('partners.id')}}</th>
            <th>{{trans('partners.logo')}}</th>
            <th>{{trans('partners.name')}}</th>
            <th>{{trans('partners.website')}}</th>
            <th>{{trans('partners.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($results) && count($results) > 0)
                <tr>
                    @foreach($results as $result)
                        <td>{{$result->id}}</td>
                        <td>{{$result->logo}}</td>
                        <td>{{$result->name}}</td>
                        <td>{{$result->website}}</td>
                        <td><a href="{{route('partner.edit', $result->id)}}" class="btn btn-info"><i
                                        class="fa fa-edit"></i></a><a href="{{route('partner.delete', $result->id)}}"
                                                                      class="btn btn-info"><i
                                        class="fa fa-trash"></i></a></td>
                    @endforeach
                </tr>
        @else
            <tr>
                <td colspan="5">
                    No results
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@stop