<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="freight_id">{{trans('freight.id')}}</label>
                    <input class="form-control" type="text" name="freight_id" id="freight_id" value="{{$results->freight_id}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="weight">{{trans('freight.weight')}}</label>
                    <input class="form-control" type="text" name="weight" id="weight" value="{{$results->weight}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="length">{{trans('freight.length')}}</label>
                    <input class="form-control" type="text" name="length" id="length" value="{{$results->length}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="height">{{trans('freight.height')}}</label>
                    <input class="form-control" type="text" name="height" id="height" value="{{$results->height}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="volume">{{trans('freight.volume')}}</label>
                    <input class="form-control" type="text" name="volume" id="volume" value="{{$results->volume}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="location">{{trans('freight.location')}}</label>
                    <input class="form-control" type="text" name="location" id="location" value="{{$results->location}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="lorry_type">{{trans('freight.lorry_type')}}</label>
                    <input class="form-control" type="text" name="lorry_type" id="lorry_type" value="{{$results->type}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="quantity">{{trans('freight.quantity')}}</label>
                    <input class="form-control" type="text" name="quantity" id="quantity" value="{{$results->quantity}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group form-control-default">
                    <label for="description">{{trans('freight.description')}}</label>
                    <input class="form-control" class="form-control"  type="text" name="description" id="description" value="{{$results->description}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>
</div>


