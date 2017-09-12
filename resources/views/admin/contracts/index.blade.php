@extends('admin.admin')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <a href="{{route('contracts.create')}}" class="btn btn-success pull-right" style="margin-bottom: 20px"> <i
                        class="fa fa-plus"></i>
                Create
                new</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Status</th>
                            @if(Sentinel::inRole('admin'))
                                <th>Owner</th>
                            @endif
                            <th>Description</th>
                            <th>Requirements</th>
                            <th>Duration</th>
                            <th>Deadline</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results))
                            @foreach($results as $contract)
                                <tr class="table-row">
                                    <td>{{$contract->status}}</td>
                                    @if(Sentinel::inRole('admin'))
                                        <td>{{$contract->owner->full_name}}</td>
                                    @endif
                                    <td>{{$contract->description}}</td>
                                    <td>{{$contract->requirements}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                    <td><a href="{{ route('contracts.edit', [$contract->id]) }}"><i  class="fa fa-pencil-square fa-2x"></i></a></td>
                                {{--<!--| <a href="{{route('contracts.delete')}}">Delete</a>-->--}}
                                <tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">No results</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop