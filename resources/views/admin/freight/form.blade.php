<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="freight_id">{{trans('freight.id')}}</label>
                    <input class="form-control" type="text" name="freight_id" id="freight_id" value="{{$results->freight_id}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="loading">Place of Loading</label>
                    <input class="form-control" type="text" name="loading" id="loading" value="{{$results->loading}}">
                    <input class="form-control" type="hidden" name="loading_lng" id="loading_lng" value="{{$results->loading_lng}}">
                    <input class="form-control" type="hidden" name="loading_lat" id="loading_lat" value="{{$results->loading_lat}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="unloading">Place of Unloading</label>
                    <input class="form-control" type="text" name="unloading" id="unloading" value="{{$results->unloading}}">
                    <input class="form-control" type="hidden" name="unloading_lng" id="unloading_lng" value="{{$results->unloading_lng}}">
                    <input class="form-control" type="hidden" name="unloading_lat" id="unloading_lat" value="{{$results->unloading_lat}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input class="form-control" type="text" name="weight" id="weight" value="{{$results->weight}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="length">Length</label>
                    <input class="form-control" type="text" name="length" id="length" value="{{$results->length}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="height">Height</label>
                    <input class="form-control" type="text" name="height" id="height" value="{{$results->height}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="volume">Volume</label>
                    <input class="form-control" type="text" name="volume" id="volume" value="{{$results->volume}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="width">Width</label>
                    <input class="form-control" type="text" name="width" id="width" value="{{$results->width}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lorry_type">{{trans('freight.lorry_type')}}</label>
                    <input class="form-control" type="text" name="lorry_type" id="lorry_type" value="{{$results->type}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="quantity">{{trans('freight.quantity')}}</label>
                    <input class="form-control" type="text" name="quantity" id="quantity" value="{{$results->quantity}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">{{trans('freight.description')}}</label>
                    <input class="form-control" class="form-control"  type="text" name="description" id="description" value="{{$results->description}}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>
</div>


