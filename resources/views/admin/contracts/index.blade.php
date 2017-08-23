@extends('admin.admin')

@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">

            <form id="create" style="float: right">
                <a href="{{route('contracts.create')}}" class="btn btn-success btn-default">Create new</a>
            </form>

                <table class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>Status</th>
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
                                <td>{{$contract->description}}</td>
                                <td>{{$contract->requirements}}</td>
                                <td>{{$contract->duration}}</td>
                                <td>{{$contract->deadline}}</td>
                                <td><a href="{{ route('contracts.edit', [$contract->id]) }}">Edit</a></td>
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
@stop