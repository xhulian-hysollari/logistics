@extends('admin.admin')

@section('content')
    <div class="block-content" style="padding-left: 20px; padding-right: 20px;">
        <div class="row main-grid">
            <table class="table table-responsive table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($results))
                    @foreach($results as $pages)
                        <tr class="table-row">
                            <td>{{$pages->page_title}}</td>
                            <td>{{$pages->slug}}</td>
                            <td>{{$pages->body}}</td>
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
@stop