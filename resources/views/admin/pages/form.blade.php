<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            @if(\App\Models\Pages::where('slug', 'about-us')->first())
                <div class="col-md-12">
                    <div class="form-group form-control-default">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{$result->page_title}}">
                    </div>
                </div>
            @else
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{$result->page_title}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-control-default">
                        <label for="slug">Is this the About Us page?</label>
                        <input name="about_page" class="form-control" type="checkbox" value="1">
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group form-control-default">
                    <label for="body">Body</label>
                    <textarea class="form-control summernote" name="body" id="body">{{$result->body}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
        </div>
    </div>
</div>
