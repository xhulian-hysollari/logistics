@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <a href="{{route('plan.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin: 20px"> <i
                            class="fa fa-plus"></i>
                    Add another plan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Cost</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results) && count($results) > 0)
                            @foreach($results as $result)
                                <tr>

                                    <td>{{$result->id}}</td>
                                    <td>{{$result->name}}</td>
                                    <td>{{$result->cost}}</td>
                                    <td>{{$result->duration}}</td>
                                    <td><a href="{{route('plan.delete', $result->slug)}}"
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