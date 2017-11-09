@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
            <a href="{{route('trucks.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin: 20px"> <i
                        class="fa fa-plus"></i>
                Create
                new</a>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="well">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="s-plate" class="form-control" placeholder="Search plate"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="s-type" class="form-control" placeholder="Search truck type"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" id="s-location" class="form-control" placeholder="Search location"/>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class="table-responsive">
                    <table class="table no-margin" id="data_table">
                        <thead>
                        <tr>
                            <th>{{trans('truck.plate')}}</th>
                            <th>{{trans('truck.type')}}</th>
                            <th>{{trans('truck.location')}}</th>
                            <th style="display: none">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $truck)
                            <tr>
                                <td>{{$truck->plate}}</td>
                                <td>{{$truck->type}}</td>
                                <td>{{$truck->location}}</td>
                                <td>
                                    @if(Sentinel::getUser()->id == $truck->user_id)
                                        <a href="{{ route('trucks.edit', [$truck->id]) }}"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a>
                                        <a href="{{route('trucks.delete', $truck->id)}}"><i
                                                    class="fa fa-trash-o fa-2x"></i></a>
                                    @else
                                        <a href="{{route('trucks.show', $truck->id)}}"><i class="fa fa-eye fa-2x"></i></a>
                                    @endif
                                    @if(Sentinel::inRole('admin') && Sentinel::getUser()->id != $truck->user_id)
                                        <a href="{{route('trucks.delete', $truck->id)}}"><i
                                                    class="fa fa-trash-o fa-2x"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
            var table = $('#data_table').DataTable({
                "ordering": false
            });
            var plate = $('#s-plate');
            var type = $('#s-type');
            var location = $('#s-location');
            plate.on('keyup change', function () {
                table
                    .column(0)
                    .search(this.value)
                    .draw();
            });
            plate.on('click', function (e) {
                e.stopPropagation();
            });
            type.on('keyup change', function () {
                table
                    .column(1)
                    .search(this.value)
                    .draw();
            });
            $('#type').on('click', function (e) {
                e.stopPropagation();
            });
            location.on('keyup change', function () {
                table
                    .column(2)
                    .search(this.value)
                    .draw();
            });
            location.on('click', function (e) {
                e.stopPropagation();
            });
        });

    </script>
@stop