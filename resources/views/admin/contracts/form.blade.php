
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    <input class="form-control"  type="text" name="status"  id="status" value="{{$result->status}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <input class="form-control"  type="text" name="description" id="description" value="{{$result->description}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="requirements">Requirements</label>
                    <input class="form-control"  type="text" name="requirements" id="requirements" value="{{$result->requirements}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input class="form-control"  type="text" name="duration" id="duration" value="{{$result->duration}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input class="form-control"  type="text" name="deadline" id="deadline" value="{{$result->deadline}}">
                </div>
            </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>