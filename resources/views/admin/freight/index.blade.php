@extends('admin.admin')
@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="row">
            <a href="{{route('freight.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin: 20px"> <i
                        class="fa fa-plus"></i>
                Create
                new</a></div>
            <div class="card-body">
                <div class="container-fluid" style="background-color: rgba(136,136,136,0.17); padding: 30px">
                    <div class="row ">
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <input type="text" id="s-loading" class="form-control" placeholder="From"/>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <input type="text" id="s-unloading" class="form-control" placeholder="To"/>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <input type="text" id="s-volume" class="form-control" placeholder="Search volume"/>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="form-group">
                                <input type="text" id="s-type" class="form-control" placeholder="Search type"/>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 ">
                            <div class="form-group">
                                <input type="text" id="s-listed" class="form-control" placeholder="Search listing time"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th><i class="fa fa-map-marker"></i> Place of loading</th>
                            <th><i class="fa fa-map-marker"></i> Place of unloading</th>
                            <th><i class="fa fa-cube"></i> {{trans('freight.volume')}}</th>
                            <th><i class="fa fa-truck"></i> {{trans('freight.lorry_type')}}</th>
                            <th><i class="fa fa-clock-o"></i> Listed at</th>
                            <th style="display: none">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $freight)
                            <tr>
                                <td>{{$freight->loading}}</td>
                                <td>{{$freight->unloading}}</td>
                                <td>{{$freight->volume}}</td>
                                <td>{{$freight->type}}</td>
                                <td>{{\Carbon\Carbon::parse($freight->created_at)->diffForHumans()}}</td>
                                <td><a href="{{route('freight.show', $freight->id)}}"><i class="fa fa-eye fa-2x"></i></a></td>
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
            var table = $('#data_table').DataTable();
            var loading = $('#s-loading');
            var unloading = $('#s-unloading');
            var volume = $('#s-volume');
            var type = $('#s-type');
            var listed = $('#s-listed');

            loading.on('keyup change', function () {
                table
                    .column(0)
                    .search(this.value)
                    .draw();
            });
            loading.on('click', function (e) {
                e.stopPropagation();
            });

            unloading.on('keyup change', function () {
                table
                    .column(1)
                    .search(this.value)
                    .draw();
            });
            unloading.on('click', function (e) {
                e.stopPropagation();
            });

            volume.on('keyup change', function () {
                table
                    .column(2)
                    .search(this.value)
                    .draw();
            });
            volume.on('click', function (e) {
                e.stopPropagation();
            });

            type.on('keyup change', function () {
                table
                    .column(3)
                    .search(this.value)
                    .draw();
            });
            type.on('click', function (e) {
                e.stopPropagation();
            });

            listed.on('keyup change', function () {
                table
                    .column(3)
                    .search(this.value)
                    .draw();
            });
            listed.on('click', function (e) {
                e.stopPropagation();
            });
        });
    </script>
@stop