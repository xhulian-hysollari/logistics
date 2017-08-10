<div class="row form-elem">
    <div class="col-md-6 form-elem">
        <div class="default-inp form-elem">
            <label for="height">{{trans('truck.height')}}</label>
            <input type="text" name="height" id="height"
                   placeholder="{{trans('truck.height')}}" value="{{$result->height}}">
        </div>
        <div class="default-inp form-elem">
            <label for="length">{{trans('truck.length')}}</label>
            <input type="text" name="length" id="length"
                   placeholder="{{trans('truck.length')}}" value="{{$result->length}}">
        </div>
        <div class="default-inp form-elem">
            <label for="lorry_type">{{trans('truck.lorry_type')}}</label>
            <input type="text" name="lorry_type" id="lorry_type"
                   placeholder="{{trans('truck.lorry_type')}}" value="{{$result->type}}">
        </div>
    </div>
    <div class="col-md-6 form-elem">
        <div class="default-inp form-elem">
            <label for="weight">{{trans('truck.weight')}}</label>
            <input type="text" name="weight" id="weight"
                   placeholder="{{trans('truck.weight')}}" value="{{$result->weight}}">
        </div>
        <div class="default-inp form-elem">
            <label for="plate">{{trans('truck.plate')}}</label>
            <input type="text" name="plate" id="plate"
                   placeholder="{{trans('truck.plate')}}" value="{{$result->plate}}">
        </div>
        <div class="default-inp form-elem">
            <label for="location">{{trans('truck.location')}}</label>
            <input type="text" name="location" id="location"
                   placeholder="{{trans('truck.location')}}" value="{{$result->location}}">
        </div>
    </div>
</div>
    <div class="default-inp form-elem">
        <label for="description">{{trans('freight.description')}}</label>
        <textarea name="description" id="description"
                  placeholder="{{trans('freight.description')}}"> {{$result->description}}</textarea>
    </div>

    <div class="form-elem">
        <button type="submit" class="btn btn-success btn-default">{{$button}}</button>
    </div>