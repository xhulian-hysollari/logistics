<header id="this-is-top">
    <div class="row">
        <div class="col-md-3 hidden-sm hidden-xs" style="display: flex; justify-content: center;">
            <a style="position:absolute; background-size: contain" href="{{route('home')}}"
               id="logo"></a>
        </div>
        <div class="col-md-9">
            {{--<div class="row header">--}}
                {{--<div class="col-sm-3 col-md-3 col-lg-3" style="margin-top: -45px;">--}}
                {{--</div>--}}
                {{--<div class="col-sm-12">--}}
                    {{--<div class="text-right header-padding visible-lg visible-md">--}}
                        {{--@include('client.partials.contact-detail')--}}
                        {{--@if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::guest())--}}
                            {{--<a class="btn btn-success"--}}
                               {{--href="{{route('register')}}">{{trans('navigation.register')}}</a>--}}
                            {{--<a class="btn btn-info" href="{{route('login')}}"><i--}}
                                        {{--class="fa fa-sign-in"></i> {{trans('navigation.login')}}</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div id="main-menu-bg"></div>
            <a id="menu-open" href="#"><i class="fa fa-bars"></i></a>
            <nav class="main-menu navbar-main-slide" style="padding-right: 5em">
                <ul class="nav navbar-nav navbar-main">
                    <li><a href="{{route('home')}}">{{trans('navigation.home')}}</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('home')}}">Consulting</a></li>
                    <li><a href="{{route('contact')}}">{{trans('navigation.contact')}}</a></li>
                    @if(\Cartalyst\Sentinel\Laravel\Facades\Sentinel::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"
                               data-toggle="dropdown">{{Sentinel::getUser()->full_name}} <i
                                        class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('coming_soon')}}">{{trans('navigation.profile')}}</a></li>
                                <li><a href="{{route('bid.index')}}">{{trans('navigation.bid')}}</a></li>
                                <li><a href="{{route('bid.offer')}}">{{trans('navigation.offer')}}</a></li>
                                <li><a href="{{route('coming_soon')}}">{{trans('navigation.dashboard')}}</a></li>
                                <li><a href="{{route('logout')}}">{{trans('navigation.logout')}}</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
            <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
        </div>
    </div>
</header>