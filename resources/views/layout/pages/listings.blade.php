@extends('layout.index')

@section('content')

    <div class="container">
        <div class="row">
            <h4>My Offers</h4>
            <table class="table table-row table-responsive table-striped">
                <thead>
                <tr>
                    <th>{{trans('bid.id')}}</th>
                    <th>{{trans('bid.owner')}}</th>
                    <th>{{trans('bid.item')}}</th>
                    <th>{{trans('bid.description')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($offers as $bid)
                    <tr>
                        <td>{{$bid->freight_id}}</td>
                        <td>{{$bid->owner}}</td>
                        @if(empty($bid->freight_id))
                            <td>Truck: {{$bid->item_name}}</td>
                        @else
                            <td>Freight: {{$bid->item_name}}</td>
                        @endif
                        <td>{{$bid->description}}</td>
                        <td><a href=""></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop