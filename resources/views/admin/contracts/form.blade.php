<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="status">Status</label>
                    <input class="form-control"  type="text" name="status"  id="status" value="{{$results->status}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="description">Description</label>
                    <input class="form-control"  type="text" name="description" id="description" value="{{$results->description}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="requirements">Requirements</label>
                    <input class="form-control"  type="text" name="requirements" id="requirements" value="{{$results->requirements}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="duration">Duration</label>
                    <input class="form-control"  type="text" name="duration" id="duration" value="{{$results->duration}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group form-control-default">
                    <label for="deadline">Deadline</label>
                    <input class="form-control"  type="text" name="deadline" id="deadline" value="{{$results->deadline}}">
                </div>
            </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>
    </div>
</div>
