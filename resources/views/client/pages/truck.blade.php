@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-12">
                <table id="data-table" class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($results as $truck)--}}
                    @for($i = 0; $i <= 15; $i++)
                        <tr>
                            <td>Hi {{$i}}</td>
                        <tr>
                        @endfor
                    {{--@endforeach--}}
                            {{--<td>{{$truck->plate}}</td>--}}
                            {{--<td>{{$truck->type}}</td>--}}
                            {{--<td>{{$truck->location}}</td>--}}
                            {{--<td>{{$truck->status}}</td>--}}
                            {{--<td><a href="{{route('trucks.show', $truck->id)}}"><i--}}
                                            {{--class="fa fa-eye fa-2x"></i></a>--}}
                            {{--</td>--}}
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

        $(document).ready(function () {
            $('#data-table thead th').each(function () {
                var title = $('#data-table thead th').eq($(this).index()).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
            });
            var table = $('#data-table').dataTable();

            table.columns().eq(0).each(function (colIdx) {
                $('input', table.column(colIdx).header()).on('keyup change', function () {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });

                $('input', table.column(colIdx).header()).on('click', function (e) {
                    e.stopPropagation();
                });
            });
        });

    </script>
@stop