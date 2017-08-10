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
                <div class="chart" data-percent="27">
                    <span><i class="fa fa-folder-open"></i></span>
                    <span class="percent"></span>Transactions in progress
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="68">
                    <span><i class="fa fa-users"></i></span>
                    <span class="percent"></span>Clients In Europe
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="31">
                    <span><i class="fa fa-truck"></i></span>
                    <span class="percent"></span>Registered Vehicles
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="105">
                    <span><i class="fa fa-archive"></i></span>
                    <span class="percent"></span>Deals Closed
                </div>
            </div>
        @endif
    </div>
</div>