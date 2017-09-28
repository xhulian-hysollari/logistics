<div class="block-content percent-blocks" data-waypoint-scroll="true">
    <div class="row stats">
        @if(isset($statistics))
            @foreach($statistics as $statistic)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="chart" data-percent="{{$statistic->count}}">
                        <span><i class="fa fa-folder-open"></i></span>
                        <span class="percent"></span>{{$statistic->type}}
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="{{count(\App\Models\Bid::all())}}">
                    <span><i class="fa fa-folder-open"></i></span>
                    <span class="percent"></span>Total Transactions
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="{{count(\App\Models\User::all())}}">
                    <span><i class="fa fa-users"></i></span>
                    <span class="percent"></span>Clients Registered
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="{{count(\App\Models\Truck::all())}}">
                    <span><i class="fa fa-truck"></i></span>
                    <span class="percent"></span>Vehicles Registered
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="{{count(\App\Models\Bid::where('status',1)->get())}}">
                    <span><i class="fa fa-archive"></i></span>
                    <span class="percent"></span>Deals Closed
                </div>
            </div>
        @endif
    </div>
</div>