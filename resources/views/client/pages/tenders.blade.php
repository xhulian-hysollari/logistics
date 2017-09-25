@extends('client.client')
@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <div class="col-sm-12">
                <table id="tendersTable" class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>Owner</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Deadline</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Owner</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Deadline</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {{--@if(isset($results))--}}
                        @if(count($results) > 0)
                            @foreach($results as $contract)
                                <tr class="table-row">
                                    <td>{{$contract->owner->full_name}}</td>
                                    <td>{{str_limit($contract->description,'35','...')}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                <tr>
                            @endforeach
                        {{--@else--}}
                            {{--<tr>--}}
                                {{--<td colspan="4">{{trans('truck.no_results')}}</td>--}}
                            {{--</tr>--}}
                        @endif
                    {{--@endif--}}
                    <tr>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    </tr>
                    {{--<tr>--}}
                    {{--<td>Test</td>--}}
                    {{--<td>Test</td>--}}
                    {{--<td>Test</td>--}}
                    {{--<td>Test</td>--}}
                    {{--</tr>--}}
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
            $('#tendersTable').dataTable({
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