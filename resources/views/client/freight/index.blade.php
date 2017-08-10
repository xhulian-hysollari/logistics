@extends('client.client')

@section('content')
    <table>
        <thead>
        <tr>
            <th>{{trans('freight.id')}}</th>
            <th>{{trans('freight.weight')}}</th>
            <th>{{trans('freight.length')}}</th>
            <th>{{trans('freight.height')}}</th>
            <th>{{trans('freight.volume')}}</th>
            <th>{{trans('freight.lorry_type')}}</th>
            <th>{{trans('freight.quantity')}}</th>
            <th>{{trans('freight.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($results))
            @foreach($results as $result)
                <tr>
                    <td>{{$result->freight_id}}</td>
                    <td>{{$result->weight}}</td>
                    <td>{{$result->length}}</td>
                    <td>{{$result->height}}</td>
                    <td>{{$result->volume}}</td>
                    <td>{{$result->lorry_type}}</td>
                    <td>{{$result->quantity}}</td>
                    <td><a href="" class="fa"></a><a href="" class="fa"></a><a href="" class="fa"></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop