@extends('admin.admin')

@section('content')

    <a href="{{route('contracts.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin-bottom: 20px">
        <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data_table" class="table no-margin">
                        <thead>
                        <tr>
                            <th>Status</th>
                            @if(Sentinel::inRole('admin'))
                                <th>Owner</th>
                            @endif
                            <th>Description</th>
                            <th>Requirements</th>
                            <th>Duration</th>
                            <th>Deadline</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results))
                            @foreach($results as $contract)
                                <tr class="table-row">
                                    <td>{{$contract->status}}</td>
                                    @if(Sentinel::inRole('admin'))
                                        <td>{{$contract->owner->full_name}}</td>
                                    @endif
                                    <td>{{str_limit($contract->description,'35','...')}}</td>
                                    <td>{{str_limit($contract->requirements,'35','...')}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                    <td>
                                        @if(Sentinel::getUser()->id == $contract->user_id)
                                            <a href="{{ route('contracts.edit', [$contract->id]) }}"><i
                                                        class="fa fa-pencil-square fa-2x"></i></a>
                                            <a href="{{route('contracts.delete', $contract->id)}}"><i
                                                        class="fa fa-fa-trash-o fa-2x"></i></a>
                                        @else
                                            <a href="{{route('contracts.show', $contract->id)}}"><i class="fa fa-eye fa-2x"></i></a>
                                        @endif
                                        @if(Sentinel::inRole('admin'))
                                                <a href="{{route('contracts.delete', $contract->id)}}"><i
                                                            class="fa fa-fa-trash fa-2x"></i></a>
                                        @endif
                                    </td>
                                <tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">No results</td>
                            </tr>
                        @endif
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
            $('#data_table').DataTable();
            $('#data_table').dataTable();
        });

    </script>
@stop