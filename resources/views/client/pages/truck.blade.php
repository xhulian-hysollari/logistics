@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-12">
                <div class="container-fluid block-content" style="background-color: rgba(136,136,136,0.17); padding: 30px">
                    <div class="row form-elem">
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-plate" placeholder="Search plate"/>
                            </div>
                        </div>
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-type" placeholder="Search truck type"/>
                            </div>
                        </div>
                    </div>
                    <div class="row form-elem">
                        <div class="col-sm-12 form-elem">
                            <div class="default-inp form-elem">
                                <input type="text" id="s-location" placeholder="Search location"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resp-table">

                <table id="data_table" class="table table-responsive table-striped">
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
                            <td><a href="{{route('trucks.show', $truck->id)}}"><i class="fa fa-eye fa-2x"></i></a></td>
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