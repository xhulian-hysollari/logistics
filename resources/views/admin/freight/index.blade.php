@extends('admin.admin')
@section('content')
    <a href="{{route('freight.create')}}" class="btn btn-success pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>{{trans('freight.id')}}</th>
                            @if(Sentinel::inRole('admin'))
                                <th>Owner</th>
                            @endif
                            <th>{{trans('freight.weight')}}</th>
                            <th>{{trans('freight.length')}}</th>
                            <th>{{trans('freight.height')}}</th>
                            <th>{{trans('freight.volume')}}</th>
                            <th>Place of loading</th>
                            <th>Place of unloading</th>
                            <th>{{trans('freight.lorry_type')}}</th>
                            <th>{{trans('freight.quantity')}}</th>
                            <th>{{trans('freight.description')}}</th>
                            <th>{{trans('freight.actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results))
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->freight_id}}</td>
                                    @if(Sentinel::inRole('admin'))
                                        <td>{{$result->owner->full_name }}</td>
                                    @endif
                                    <td>{{$result->weight}}</td>
                                    <td>{{$result->length}}</td>
                                    <td>{{$result->height}}</td>
                                    <td>{{$result->volume}}</td>
                                    <td>{{$result->loading}}</td>
                                    <td>{{$result->unloading}}</td>
                                    <td>{{$result->type}}</td>
                                    <td>{{$result->quantity}}</td>
                                    <td>{{$result->description}}</td>
                                    <td><a href="{{route('freight.edit', $result->id)}}">  <i  class="fa fa-pencil-square fa-2x"></i></a><a href="{{}}" class="fa"></a><a href="" class="fa"></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop