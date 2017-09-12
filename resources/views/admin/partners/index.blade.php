@extends('admin.admin')

@section('content')
    <a href="{{route('partner.add')}}" class="btn ink-reaction btn-primary pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Add another partner</a>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
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
                            @foreach($results as $result)
                                <tr>

                                    <td>{{$result->id}}</td>
                                    <td>{{$result->logo}}</td>
                                    <td>{{$result->name}}</td>
                                    <td>{{$result->website}}</td>
                                    <td><a href="{{route('partner.edit', $result->id)}}" class="btn btn-info"><i
                                                    class="fa fa-edit"></i></a><a
                                                href="{{route('partner.delete', $result->id)}}"
                                                class="btn btn-info"><i
                                                    class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach
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