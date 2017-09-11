@extends('admin.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <h4>My Bids</h4>
            <table class="table table-responsive table-striped">
                <thead>
                <tr>
                    <th>{{trans('bid.id')}}</th>
                    <th>{{trans('bid.owner')}}</th>
                    <th>{{trans('bid.item')}}</th>
                    <th>Click for more info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bids as $bid)
                    <tr>
                        <td>#{{$bid->id}}</td>
                        <td>{{$bid->owner->full_name}}</td>
                        @if(!empty($bid->truck_id))
                            <td>Truck: {{$bid->item_name}}</td>
                        @endif
                        @if(!empty($bid->freight_id))
                            <td>Freight: {{$bid->item_name}}</td>
                        @endif
                        @if(!empty($bid->contract_id))
                            <td>Contract: {{$bid->item_name}}</td>
                        @endif
                        <td><a href="{{route('bid.details', $bid->id)}}">View details</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop