@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-12">
                <table id="data_table" class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th><i class="fa fa-map-marker"></i> Place of loading</th>
                        <th><i class="fa fa-map-marker"></i> Place of unloading</th>
                        <th><i class="fa fa-cube"></i> {{trans('freight.volume')}}</th>
                        <th><i class="fa fa-truck"></i> {{trans('freight.lorry_type')}}</th>
                        <th><i class="fa fa-clock-o"></i> Listed at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0; $i <= 5; $i ++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$i}}</td>
                            <td>{{$i}}</td>
                            <td>{{$i}}</td>
                            <td>{{$i}}</td>
                            <td>{{$i}}</td>
                        </tr>
                    @endfor
                            {{--@foreach($results as $freight)--}}
                                {{--<tr>--}}
                                    {{--<th>--}}
                                        {{--{{$freight->loading}}--}}
                                    {{--</th>--}}
                                    {{--<th>--}}
                                        {{--{{$freight->unloading}}--}}
                                    {{--</th>--}}
                                    {{--<th>--}}
                                        {{--{{$freight->volume}}--}}
                                    {{--</th>--}}
                                    {{--<th>--}}
                                        {{--{{$freight->type}}--}}
                                    {{--</th>--}}
                                    {{--<th>--}}
                                        {{--{{$freight->created_at}}--}}
                                    {{--</th>--}}
                                    {{--<th>--}}
                                        {{--HI--}}
                                    {{--</th>--}}
                                {{--<tr>--}}
                            {{--@endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/components/bs-datatable.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

@stop
@section('js')
    <script type="text/javascript" src="{{asset('js/components/bs-datatable.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script>

        $(document).ready(function() {
            $('#data_table').dataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });

    </script>
@stop