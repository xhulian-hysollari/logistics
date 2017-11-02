<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="plate">{{trans('truck.plate')}}</label>
                    <input class="form-control"  type="text" name="plate"  id="plate" value="{{$result->plate}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="weight">{{trans('truck.weight')}}</label>
                    <input class="form-control"  type="text" name="weight" id="weight" value="{{$result->weight}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="length">{{trans('truck.length')}}</label>
                    <input class="form-control"  type="text" name="length" id="length" value="{{$result->length}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="height">{{trans('truck.height')}}</label>
                    <input class="form-control"  type="text" name="height" id="height" value="{{$result->height}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">{{trans('truck.location')}}</label>
                    <input class="form-control"  type="text" name="location" id="location" value="{{$result->location}}">
                    <input class="form-control"  type="hidden" name="location_lng" id="location_lng" value="{{$result->location_lng}}">
                    <input class="form-control"  type="hidden" name="location_lat" id="location_lat" value="{{$result->location_lat}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lorry_type">Destination</label>
                    <input class="form-control"  type="text" name="destination" id="destination" value="{{$result->location}}">
                    <input class="form-control"  type="hidden" name="destination_lng" id="destination_lng" value="{{$result->location_lng}}">
                    <input class="form-control"  type="hidden" name="destination_lat" id="destination_lat" value="{{$result->location_lat}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lorry_type">{{trans('truck.lorry_type')}}</label>
                    <input class="form-control"  type="text" name="lorry_type" id="lorry_type" value="{{$result->type}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="valid_until">Valid Until</label>
                    <input class="form-control"  type="date" name="valid_until" id="valid_until" value="{{$result->type}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">{{trans('freight.description')}}</label>
                    <input class="form-control"  type="text" name="description" id="description" value="{{$result->description}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>
</div>