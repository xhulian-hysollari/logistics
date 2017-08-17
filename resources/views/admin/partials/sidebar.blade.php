<div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-skin-blue sidebar-visible-desktop" id=sidebar-menu
     data-type=collapse>
    <div class="split-vertical">
        <div class="split-vertical-body">
            <div class="split-vertical-cell">
                <div class="tab-content">
                    <div class="tab-pane active" id="sidebar-tabs-menu">
                        <div data-scrollable>
                            <ul class="sidebar-menu sm-icons-right sm-icons-block">
                                <li class="active"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i>
                                        <span>{{trans('admin.dashboard')}}</span></a></li>
                                <li><a href="{{route('admin', 'inbox')}}"><i class="fa fa-envelope"></i>
                                        <span>{{trans('admin.inbox')}}</span></a>
                                </li>
                            </ul>
                            <ul class="sidebar-menu sm-bordered sm-active-item-bg">
                                {{--<li><a href="{{route('freight_list')}}"><i class="fa fa-list"></i>--}}
                                        {{--<span>{{trans('admin.listings')}}</span></a></li>--}}
                                {{--<li><a href="{{route('truck_list')}}"><i class="fa fa-truck"></i>--}}
                                        {{--<span>{{trans('admin.trucks')}}</span></a></li>--}}
                                <li><a href="{{route('user_list')}}"><i class="fa fa-users"></i>
                                        <span>{{trans('admin.users')}}</span></a></li>
                                <li><a href="{{route('settings')}}"><i class="fa fa-cogs"></i>
                                        <span>{{trans('admin.settings')}}</span></a></li>
                                <li><a href="{{route('partner_list')}}"><i class="fa fa-user-secret"></i>
                                        <span>{{trans('admin.partners')}}</span></a></li>
                                <li><a href="{{route('legal.list')}}"><i class="fa fa-list"></i>
                                        <span>{{trans('admin.legal')}}</span></a></li>
                                <li><a href=""><i class="fa fa-list"></i>
                                        <span>{{trans('admin.listings')}}</span></a></li>
                                <li><a href=""><i class="fa fa-truck"></i>
                                        <span>{{trans('admin.trucks')}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>