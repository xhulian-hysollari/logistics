@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-12">
                <table class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>Owner</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Deadline</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($results))
                        @if(count($results) > 0)
                            <tr class="table-row">
                                @foreach($results as $truck)
                                    <td>{{$contract->owner->full_name}}</td>
                                    <td>{{str_limit($contract->description,'35','...')}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                    <td><a href="{{route('contracts.show', $truck->id)}}"><i
                                                    class="fa fa-eye fa-2x"></i></a>
                                    </td>
                            @endforeach
                            <tr>
                        @else
                            <tr>
                                <td colspan="5">{{trans('truck.no_results')}}</td>
                            </tr>
                        @endif
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop