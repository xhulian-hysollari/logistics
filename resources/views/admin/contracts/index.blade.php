@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div style="width: 100%" class="row">
                <a href="{{route('contracts.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin: 20px">
                    <i
                            class="fa fa-plus"></i>
                    Create
                    new</a>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="well">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="s-owner" class="form-control" placeholder="Search owner"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="s-description" class="form-control" placeholder="Search description"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="s-duration" class="form-control" placeholder="Search duration"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="s-deadline" class="form-control" placeholder="Search deadline"/>
                        </div>
                    </div>
                </div></div>
                </div>
                <div class="table-responsive">

                    <table id="data_table" class="table no-margin">
                        <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Description</th>
                            <th>Duration</th>
                            <th>Deadline</th>
                            <th style="display: none">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $contract)
                            <tr>
                                <td>{{$contract->owner->full_name}}</td>
                                <td>{{str_limit($contract->description,'35','...')}}</td>
                                <td>{{$contract->duration}}</td>
                                <td>{{$contract->deadline}}</td>
                                <td>
                                    @if(Sentinel::getUser()->id == $contract->user_id)
                                        <a href="{{ route('contracts.edit', [$contract->id]) }}"><i
                                                    class="fa fa-pencil-square fa-2x"></i></a>
                                        <a href="{{route('contracts.delete', $contract->id)}}"><i
                                                    class="fa fa-trash-o fa-2x"></i></a>
                                    @else
                                        <a href="{{route('contracts.show', $contract->id)}}"><i class="fa fa-eye fa-2x"></i></a>
                                    @endif
                                    @if(Sentinel::inRole('admin') && Sentinel::getUser()->id != $contract->user_id)
                                        <a href="{{route('contracts.delete', $contract->id)}}"><i
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

        $(document).ready(function() {

            var table = $('#data_table').DataTable({
                "ordering": false
            });
            var owner = $('#s-owner');
            var description = $('#s-description');
            var duration = $('#s-duration');
            var deadline = $('#s-deadline');

            owner.on('keyup change', function () {
                table
                    .column(0)
                    .search(this.value)
                    .draw();
            });
            owner.on('click', function (e) {
                e.stopPropagation();
            });

            description.on('keyup change', function () {
                table
                    .column(1)
                    .search(this.value)
                    .draw();
            });
            description.on('click', function (e) {
                e.stopPropagation();
            });

            duration.on('keyup change', function () {
                table
                    .column(2)
                    .search(this.value)
                    .draw();
            });
            duration.on('click', function (e) {
                e.stopPropagation();
            });

            deadline.on('keyup change', function () {
                table
                    .column(3)
                    .search(this.value)
                    .draw();
            });
            deadline.on('click', function (e) {
                e.stopPropagation();
            });
        });
    </script>
@stop