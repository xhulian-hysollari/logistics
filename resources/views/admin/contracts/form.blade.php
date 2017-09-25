
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control"  type="text" name="title" id="title" value="{{$result->title}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input class="form-control"  type="number" name="duration" id="duration" value="{{$result->duration}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="requirements">Requirements</label>
                    <textarea name="requirements" id="requirements" rows="3">{{$result->requirements}}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="3">{{$result->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="deadline">Application Deadline</label>
                    <input class="form-control"  type="date" name="deadline" id="deadline" value="{{$result->deadline}}">
                </div>
            </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>