<div class="section counter-section nomargin dark clearfix">
    <div class="container clearfix common-height">
        <div class="row">
            <div class="col-lg-3 col-md-6 center">
                <div>
                    <i class="i-plain i-large divcenter color icon-car-fulltime"></i>
                    <div class="counter"><span data-from="0" data-to="{{count(\App\Models\Bid::all())}}" data-refresh-interval="50"
                                               data-speed="1000"></span></div>
                    <h5>Total Transactions</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 center">
                <div>
                    <i class="i-plain i-large divcenter color icon-car-money"></i>
                    <div class="counter"><span data-from="0" data-to="{{count(\App\Models\User::all())}}" data-refresh-interval="50"
                                               data-speed="700"></span></div>
                    <h5>Happy Customers</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 center">
                <div>
                    <i class="i-plain i-large divcenter color icon-car-fan"></i>
                    <div class="counter"><span data-from="0" data-to="{{count(\App\Models\Truck::all())}}" data-refresh-interval="85"
                                               data-speed="1200"></span></div>
                    <h5>Vehicles Registered</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 center">
                <div>
                    <i class="i-plain i-large divcenter color icon-car-fuel2"></i>
                    <div class="counter"><span data-from="0" data-to="{{count(\App\Models\Bid::where('status',1)->get())}}" data-refresh-interval="30"
                                               data-speed="900"></span></div>
                    <h5>Deals Closed</h5>
                </div>
            </div>
        </div>
    </div>
</div>
