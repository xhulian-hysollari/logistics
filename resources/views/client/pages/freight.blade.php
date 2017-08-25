@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::check())
            @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::inRole('freight'))
                <a href="{{route('freight.create')}}" class="btn btn-info"><i
                            class="fa fa-plus"></i>{{trans('freight.add')}}</a>
            @endif
        @endif
        <div class="row main-grid">
            <div class="col-sm-12">
                <table class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>Place of loading</th>
                        <th>Place of unloading</th>
                        <th>{{trans('freight.volume')}}</th>
                        <th>{{trans('freight.lorry_type')}}</th>
                        <th>{{trans('freight.listed_at')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($results))
                        @if(count($results) > 0)
                            @foreach($results as $freight)
                                <tr class="table-row">
                                    <th>{{$freight->loading}}</th>
                                    <th>{{$freight->unloading}}</th>
                                    <th>{{$freight->volume}}</th>
                                    <th>{{$freight->type}}</th>
                                    <th>{{$freight->created_at}}</th>
                                    <th><a href="{{route('freight.show', $freight->id)}}"><i class="fa fa-eye"></i></a>
                                    </th>
                                <tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">{{trans('freight.no_results')}}</td>
                            </tr>
                        @endif
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop