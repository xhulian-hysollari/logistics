@extends('admin.admin')

@section('content')

    <a href="{{route('contracts.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin-bottom: 20px">
        <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="col-lg-12">
        <div class="card">
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
                                    <td>{{str_limit($contract->description,'100','...')}}</td>
                                    <td>{{str_limit($contract->requirements,'100','...')}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                    <td>
                                        @if(Sentinel::getUser()->id == $contract->user_id)
                                            <a href="{{ route('contracts.edit', [$contract->id]) }}"><i
                                                        class="fa fa-pencil-square fa-2x"></i></a>
                                            <a href=""></a>
                                        @else
                                            <a href=""></a>
                                        @endif
                                    </td>
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