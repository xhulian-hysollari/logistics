@extends('admin.admin')

@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">

            <form id="create" style="float: right">
                <a href="{{route('pages.create')}}" class="btn btn-success btn-default">Create new</a>
            </form>

            <table class="table table-responsive table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Body</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($results))
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
@stop