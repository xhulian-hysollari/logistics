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
                    <label for="loading">Place of Loading</label>
                    <input class="form-control" type="text" name="loading" id="loading" value="{{$results->loading}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="unloading">Place of Unloading</label>
                    <input class="form-control" type="text" name="unloading" id="unloading" value="{{$results->unloading}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="weight">Weight</label>
                    <input class="form-control" type="text" name="weight" id="weight" value="{{$results->weight}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="length">Length</label>
                    <input class="form-control" type="text" name="length" id="length" value="{{$results->length}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="height">Height</label>
                    <input class="form-control" type="text" name="height" id="height" value="{{$results->height}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="volume">Volume</label>
                    <input class="form-control" type="text" name="volume" id="volume" value="{{$results->volume}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-control-default">
                    <label for="width">Width</label>
                    <input class="form-control" type="text" name="width" id="width" value="{{$results->width}}">
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


