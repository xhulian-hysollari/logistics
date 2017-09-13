@extends('admin.admin')

@section('content')
    <a href="{{route('pages.create')}}" class="btn ink-reaction btn-primary pull-right" style="margin-bottom: 20px"> <i
                class="fa fa-plus"></i>
        Create
        new</a>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>URL</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($results) && count($results) > 0)
                            @foreach($results as $pages)
                                <tr class="table-row">
                                    <td>{{$pages->page_title}}</td>
                                    <td>{{$pages->slug}}</td>
                                    <td><a href="{{route('pages', $pages->slug)}}" target="_blank">{{route('pages', $pages->slug)}}</a></td>
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