@extends('admin.admin')

@section('content')
    <a href="{{route('partner.add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Add another partner</a>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="table-responsive">
                    <table class="table v-middle">
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
                                                    class="fa fa-edit"></i></a><a
                                                href="{{route('partner.delete', $result->id)}}"
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
                </div>
            </div>
        </div>
    </div>
@stop