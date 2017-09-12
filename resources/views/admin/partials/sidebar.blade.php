<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="{{route('home')}}">
                <span class="text-lg text-bold text-primary ">MAX Logistics</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">
        <ul id="main-menu" class="gui-controls">
            <li>
                <a href="{{route('dashboard')}}" class="active">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('messages')}}" class="active">
                    <div class="gui-icon"><i class="md md-email"></i></div>
                    <span class="title">Email</span>
                </a>
            </li>
            <li>
                <a href="{{route('freight.index')}}" class="active">
                    <div class="gui-icon"><i class="md md-view-list"></i></div>
                    <span class="title">Freights</span>
                </a>
            </li>
            <li>
                <a href="{{route('trucks.index')}}" class="active">
                    <div class="gui-icon"><i class="md md-local-shipping"></i></div>
                    <span class="title">Trucks</span>
                </a>
            </li>
            <li>
                <a href="{{route('contracts.index')}}" class="active">
                    <div class="gui-icon"><i class="md md-recent-actors"></i></div>
                    <span class="title">Tender</span>
                </a>
            </li>
            <li>
                <a href="{{route('bid.offer')}}" class="active">
                    <div class="gui-icon"><i class="md md-keyboard-return"></i></div>
                    <span class="title">My Offers</span>
                </a>
            </li>
            <li>
                <a href="{{route('bid.index')}}" class="active">
                    <div class="gui-icon"><i class="md md-keyboard-tab"></i></div>
                    <span class="title">My Bids</span>
                </a>
            </li>
            @if(Sentinel::inRole('admin'))
                <li>
                    <a href="{{route('user_list')}}" class="active">
                        <div class="gui-icon"><i class="md md-people"></i></div>
                        <span class="title">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('settings')}}" class="active">
                        <div class="gui-icon"><i class="md md-settings"></i></div>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('pages.index')}}" class="active">
                        <div class="gui-icon"><i class="md md-folder"></i></div>
                        <span class="title">Pages</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('partner_list')}}" class="active">
                        <div class="gui-icon"><i class="md md-account-child"></i></div>
                        <span class="title">Partners</span>
                    </a>
                </li>

            @endif
        </ul>
    </div>
</div>