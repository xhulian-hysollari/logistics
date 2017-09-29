<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="name">Partner Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$result->name}}"
                           placeholder="Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="website">Partner Website</label>
                    <input type="text" value="{{$result->website}}" class="form-control" id="website" name="website"
                           placeholder="https://website.com">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group form-control-default">
                    <label for="logo">Partner Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*"
                           value="{{$result->logo}}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>