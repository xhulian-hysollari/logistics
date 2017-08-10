@if(count($contacts = \App\Models\Setting::where('type',0)->get()) > 0)
    @foreach($contacts as $contact)
        <div class="h-block">
            <span>{{trans('settings.'.$contact->getTranslation()->title)}}</span>{{$contact->getTranslation()->value}}
        </div>
    @endforeach
@endif