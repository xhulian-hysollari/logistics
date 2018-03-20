@extends('layout.index')
@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Contract Listing</h1>
            <span>Search all the contracts listed in MaxLogistics LTD.</span>
        </div>

    </section><!-- #page-title end -->
    <div class="container-fluid topmargin" style="padding-left: 20px; padding-right: 20px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="bottommargin" style="background-color: rgba(136,136,136,0.17); padding: 30px">
                    <div class="row bottommargin">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class=" sm-form-control input-block-level" type="text" id="s-owner" placeholder="Search owner"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class=" sm-form-control input-block-level" type="text" id="s-description" placeholder="Search description"/>
                            </div>
                        </div>
                    </div>
                    <div class="row form-elem">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class=" sm-form-control input-block-level" type="text" id="s-duration" placeholder="Search duration"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class=" sm-form-control input-block-level" type="text" id="s-deadline" placeholder="Search deadline"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resp-table">
                <table id="data-table" class="table table-striped">
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
                            <td><a href="{{route('contracts.show', $contract->id)}}"><i class="i-plain icon-folder-open"></i></a></td>
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
            var table = $('#data-table').DataTable({
                "ordering": false,
                "dom": 'lrtp'
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