@extends('admin.admin')

@section('content')
    <a href="{{route('freight.create')}}" class="btn btn-success pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results) && count($results) > 0)
                            @foreach($results as $pages)
                                <tr class="table-row">
                                    <td>{{$pages->page_title}}</td>
                                    <td>{{$pages->slug}}</td>
                                    <td>{!! $pages->body !!}</td>
                                    <td><a href="{{ route('pages.edit', [$pages->id]) }}">Edit</a></td>
                                {{--<!--| <a href="{{route('pages.delete')}}">Delete</a>-->--}}
                                <tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">No results</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop