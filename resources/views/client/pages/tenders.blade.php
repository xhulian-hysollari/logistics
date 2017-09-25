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
                        <th></th>
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
                    @if(isset($results))
                        @if(count($results) > 0)
                            <tr class="table-row">
                                @foreach($results as $contract)
                                    <td>{{$contract->owner->full_name}}</td>
                                    <td>{{str_limit($contract->description,'35','...')}}</td>
                                    <td>{{$contract->duration}}</td>
                                    <td>{{$contract->deadline}}</td>
                                    <td><a href="{{route('contracts.show', $contract->id)}}"><i
                                                    class="fa fa-eye fa-2x"></i></a>
                                    </td>
                            @endforeach
                            <tr>
                        @else
                            <tr>
                                <td colspan="5">{{trans('truck.no_results')}}</td>
                            </tr>
                        @endif
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#tendersTable tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#tendersTable').DataTable();

            // Apply the search
            table.columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
    </script>
@stop