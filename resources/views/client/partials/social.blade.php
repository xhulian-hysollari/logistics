@if(count($social = \App\Models\Setting::where('type',1)->get()) > 0)
    @foreach($social as $links)
        <a href="{{$links->value}}" target="_blank"><i class="fa fa-{{$links->title}}"></i></a>
    @endforeach
@endif