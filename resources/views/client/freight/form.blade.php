<div class="row form-elem">
<div class="col-md-6 form-elem">
    <div class="default-inp form-elem">
        <label for="freight_id">{{trans('freight.id')}}</label>
        <input type="text" name="freight_id" id="freight_id"
               placeholder="{{trans('freight.id')}}" value="{{$result->freight_id}}">
    </div>
    <div class="default-inp form-elem">
        <label for="weight">{{trans('freight.weight')}}</label>
        <input type="text" name="weight" id="weight"
               placeholder="{{trans('freight.weight')}}" value="{{$result->weight}}">
    </div>
    <div class="default-inp form-elem">
        <label for="length">{{trans('freight.length')}}</label>
        <input type="text" name="length" id="length"
               placeholder="{{trans('freight.length')}}" value="{{$result->length}}">
    </div>
    <div class="default-inp form-elem">
        <label for="height">{{trans('freight.height')}}</label>
        <input type="text" name="height" id="height"
               placeholder="{{trans('freight.height')}}" value="{{$result->height}}">
    </div>
    <div class="default-inp form-elem">
        <label for="volume">{{trans('freight.volume')}}</label>
        <input type="text" name="volume" id="volume"
               placeholder="{{trans('freight.volume')}}" value="{{$result->volume}}">
    </div>
</div>
    <div class="col-md-6 form-elem">
    <div class="default-inp form-elem">
        <label for="lorry_type">{{trans('freight.lorry_type')}}</label>
        <input type="text" name="lorry_type" id="lorry_type"
               placeholder="{{trans('freight.lorry_type')}}" value="{{$result->type}}">
    </div>
    <div class="default-inp form-elem">
        <label for="quantity">{{trans('freight.quantity')}}</label>
        <input type="text" name="quantity" id="quantity"
               placeholder="{{trans('freight.quantity')}}" value="{{$result->quantity}}">
    </div>
    <div class="default-inp form-elem">
        <label for="location">{{trans('freight.location')}}</label>
        <input type="text" name="location" id="location"
               placeholder="{{trans('freight.location')}}" value="{{$result->location}}">
    </div>

        <div class="default-inp form-elem">
            <label for="destination">{{trans('freight.destination')}}</label>
            <input type="text" name="destination" id="destination"
                   placeholder="{{trans('freight.destination')}}" value="{{$result->destination}}">
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
