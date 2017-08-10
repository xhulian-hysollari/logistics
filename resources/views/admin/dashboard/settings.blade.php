@extends('admin.admin')
@section('content')
    <div class="tabbable tabs-vertical tabs-left">

        <!-- Tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#contact" data-toggle="tab"><i class="fa fa-fw fa-home"></i> Contacts</a></li>
            <li><a href="#socials" data-toggle="tab"><i class="fa fa-fw fa-user"></i> Social links</a></li>
            <li><a href="#slider" data-toggle="tab"><i class="fa fa-fw fa-sliders"></i> Slider</a></li>
            <li><a href="#about" data-toggle="tab"><i class="fa fa-fw fa-building"></i> About Us</a></li>
            <li><a href="#mission" data-toggle="tab"><i class="fa fa-fw fa-file-text"></i> Mission Statement</a></li>
            <li><a href="#service" data-toggle="tab"><i class="fa fa-fw fa-file-text"></i> Services</a></li>
            {{--<li><a href="#payments" data-toggle="tab"><i class="fa fa-fw fa-money"></i> Subscription Plans</a></li>--}}
            <li><a href="#ads" data-toggle="tab"><i class="fa fa-fw fa-money"></i> Advertisments</a></li>
        </ul>
        <!-- // END Tabs -->

        <!-- Panes -->
        <div class="tab-content">
            <div id="contact" class="tab-pane active">
                <table class="table table-responsive table-striped">
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>{{trans('settings.website')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    @if(isset($contacts) && count($contacts) > 0)
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->getTranslation()->title}}</td>
                                <td>{{$contact->getTranslation()->value}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                No contacts added
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.contact')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="title">Select Contact Type</label>
                                <select name="title" id="social" class="form-control">
                                    <option value="phone"> Phone</option>
                                    <option value="email"> Email</option>
                                    <option value="work_hours"> Working hours</option>
                                    <option value="address"> Address</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value">Contact</label>
                                <input type="text" class="form-control" id="value" name="value"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="socials" class="tab-pane">
                <table class="table table-responsive table-striped">
                    <thead>
                    <tr>
                        <th>{{trans('settings.website')}}</th>
                        <th>{{trans('settings.link')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($socials) && count($socials) > 0)
                        @foreach($socials as $social)
                            <tr>
                                <td>{{$social->getTranslation()->title}}</td>
                                <td>{{$social->getTranslation()->value}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                No social media pages
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.social')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="title">Social Page Type</label>
                                <select name="title" id="title" class="form-control">
                                    <option value="facebook"> Facebook</option>
                                    <option value="twitter"> Twitter</option>
                                    <option value="linkedin"> LinkedIn</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value">Social Page Link</label>
                                <input type="text" class="form-control" id="value" name="value"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="about" class="tab-pane">
                <form action="{{route('settings.about')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value_sq">About SQ</label>
                                <textarea name="value_sq" id="value_sq"
                                          class="form-control summernote">{{ (count ($about) > 0 && isset($about->hasTranslation('sq')->value)) ? $about->getTranslation('sq')->value : null }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value_en">About EN</label>
                                <textarea name="value_en" id="value_en"
                                          class="form-control summernote">{{ (count ($about) > 0 && isset($about->hasTranslation('en')->value)) ? $about->getTranslation('en')->value : null }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="slider" class="tab-pane">
                <table class="table table-responsive table-striped">
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>{{trans('settings.website')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    @if(isset($sliders) && count($sliders) > 0)
                        @foreach($sliders as $slider)
                            <tr>
                                <td>
                                    <table class="table table-responsive">
                                        <tr>
                                            <td>{{$slider->getTranslation('en')->title}}</td>
                                            <td>{{$slider->getTranslation('en')->value}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{$slider->getTranslation('sq')->title}}</td>
                                            <td>{{$slider->getTranslation('sq')->value}}</td>
                                        </tr>
                                    </table>
                                </td>
                                <td><a href="{{asset('storage/'.$slider->optional)}}" target="_blank">Open</a></td>
                                <td><a href="{{route('setting.delete', $slider->id)}}" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">
                                No social media pages
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.slider')}}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('title_sq')) ? ' has-error' : '' !!}">
                                <label for="title_sq">Slider Title SQ</label>
                                <input type="text" class="form-control" id="title_sq" name="title_sq"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('title_sq')}}">
                                {!! ($errors->has('title_sq') ? $errors->first('title_sq') : '') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('title_en')) ? ' has-error' : '' !!}">
                                <label for="title_en">Slider Title EN</label>
                                <input type="text" class="form-control" id="title_en" name="title_en"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('title_en')}}">
                                {!! ($errors->has('title_en') ? $errors->first('title_en') : '') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('value_sq')) ? ' has-error' : '' !!}">
                                <label for="value_sq">Slider Caption SQ</label>
                                <input type="text" class="form-control" id="value_sq" name="value_sq"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value_sq')}}">
                                {!! ($errors->has('value_sq') ? $errors->first('value_sq') : '') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('value_en')) ? ' has-error' : '' !!}">
                                <label for="value_en">Slider Caption EN</label>
                                <input type="text" class="form-control" id="value_en" name="value_en"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value_en')}}">
                                {!! ($errors->has('value_en') ? $errors->first('value_en') : '') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-control-default{!! ($errors->has('optional')) ? ' has-error' : '' !!}">
                                <label for="optional">Slider Image</label>
                                <input type="file" accept="image/*" class="form-control" id="optional" name="optional">
                                {!! ($errors->has('optional') ? $errors->first('optional') : '') !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="service" class="tab-pane">
                <table class="table table-responsive table-striped">
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>{{trans('settings.website')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    @if(isset($services) && count($services) > 0)
                        @foreach($services as $service)
                            <tr>
                                <td>
                                    <table class="table table-responsive">
                                        <tr>
                                            <td>{{$service->getTranslation('sq')->title}}</td>
                                            <td>{{$service->getTranslation('sq')->value}}</td>
                                        </tr>
                                        <tr>
                                            <td>{{$service->getTranslation('en')->title}}</td>
                                            <td>{{$service->getTranslation('en')->value}}</td>
                                        </tr>
                                    </table>
                                </td>
                                <td><a href="{{asset('storage/'.$service->optional)}}" target="_blank">Open</a></td>
                                <td><a href="{{route('setting.delete',$service->id)}}" class="btn btn-danger"><i
                                                class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">
                                No social media pages
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.service')}}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('title_sq')) ? ' has-error' : '' !!}">
                                <label for="title_sq">Service Title SQ</label>
                                <input type="text" class="form-control" id="title_sq" name="title_sq"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('title_sq')}}">
                                {!! ($errors->has('title_sq') ? $errors->first('title_sq') : '') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('title_en')) ? ' has-error' : '' !!}">
                                <label for="title_en">Service Title EN</label>
                                <input type="text" class="form-control" id="title_en" name="title_en"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('title_en')}}">
                                {!! ($errors->has('title_en') ? $errors->first('title_en') : '') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('value_sq')) ? ' has-error' : '' !!}">
                                <label for="value_sq">Service Caption SQ</label>
                                <input type="text" class="form-control" id="value_sq" name="value_sq"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value_sq')}}">
                                {!! ($errors->has('value_sq') ? $errors->first('value_sq') : '') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default{!! ($errors->has('value_en')) ? ' has-error' : '' !!}">
                                <label for="value_en">Service Caption EN</label>
                                <input type="text" class="form-control" id="value_en" name="value_en"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value_en')}}">
                                {!! ($errors->has('value_en') ? $errors->first('value_en') : '') !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-control-default{!! ($errors->has('optional')) ? ' has-error' : '' !!}">
                                <label for="optional">Service Image</label>
                                <input type="file" accept="image/*" class="form-control" id="optional" name="optional">
                                {!! ($errors->has('optional') ? $errors->first('optional') : '') !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="mission" class="tab-pane">
                <form action="{{route('settings.mission')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value_sq">Mission Statement SQ</label>
                                <textarea name="value_sq" id="value_sq"
                                          class="form-control summernote">{{ (count ($mission) > 0 && isset($mission->hasTranslation('sq')->value)) ? $mission->getTranslation('sq')->value : null }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value_en">Mission Statement EN</label>
                                <textarea name="value_en" id="value_en"
                                          class="form-control summernote">{{ (count ($mission) > 0 && isset($mission->hasTranslation('en')->value)) ? $mission->getTranslation('en')->value : null }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="payments" class="tab-pane">
                <table class="table table-responsive table-striped">
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>{{trans('settings.website')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    @if(isset($plans) && count($plans) > 0)
                        @foreach($plans as $plan)
                            <tr>
                                <td>{{$plan->getTranslation()->title}}</td>
                                <td>{{$plan->getTranslation()->value}}</td>
                                <td>{{$plan->getTranslation()->optional}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">
                                No subscription plans
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.payment')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="title">Plan Type</label>
                                <select name="title" id="title" class="form-control">
                                    <option value="trial"> Trial</option>
                                    <option value="monthly"> Monthly</option>
                                    <option value="yearly"> Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value">Plan Price</label>
                                <input type="text" class="form-control" id="value" name="value"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-control-default">
                                <label for="optional">Duration</label>
                                <input type="text" class="form-control" id="optional" name="optional"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('optional')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div id="ads" class="tab-pane">
                <table class="table table-responsive table-striped">
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th>{{trans('settings.website')}}</th>--}}
                    {{--<th>{{trans('settings.link')}}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    <tbody>
                    @if(isset($ads) && count($ads) > 0)
                        @foreach($ads as $ad)
                            <tr>
                                <td>{{$ad->getTransaltion()->title}}</td>
                                <td>{{$ad->getTransaltion()->value}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">
                                No ad settings
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <form action="{{route('settings.ads')}}" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="title">Ads Type</label>
                                <select name="title" id="title" class="form-control">
                                    <option value="1-time"> 1 Time</option>
                                    <option value="hourly"> Hourly</option>
                                    <option value="daily"> Daily</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-control-default">
                                <label for="value">Ads Cost</label>
                                <input type="text" class="form-control" id="value" name="value"
                                       placeholder=""
                                       value="{{\Illuminate\Support\Facades\Input::old('value')}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- // END Panes -->

    </div>
    <!-- // END Tabbable Widget -->
@stop

@section('css')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@stop
@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();
        });
    </script>
@stop