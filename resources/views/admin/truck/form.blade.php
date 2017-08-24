<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="plate">{{trans('truck.plate')}}</label>
                    <input class="form-control"  type="text" name="plate"  id="plate" value="{{$result->plate}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="weight">{{trans('truck.weight')}}</label>
                    <input class="form-control"  type="text" name="weight" id="weight" value="{{$result->weight}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="length">{{trans('truck.length')}}</label>
                    <input class="form-control"  type="text" name="length" id="length" value="{{$result->length}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="height">{{trans('truck.height')}}</label>
                    <input class="form-control"  type="text" name="height" id="height" value="{{$result->height}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="location">{{trans('truck.location')}}</label>
                    <input class="form-control"  type="text" name="location" id="location" value="{{$result->location}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="lorry_type">{{trans('truck.lorry_type')}}</label>
                    <input class="form-control"  type="text" name="lorry_type" id="lorry_type" value="{{$result->type}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group form-control-default">
                    <label for="description">{{trans('freight.description')}}</label>
                    <input class="form-control"  type="text" name="description" id="description" value="{{$result->description}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>
</div>