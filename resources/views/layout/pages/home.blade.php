@extends('layout.index')

@section('slider')
    @include('layout.partials.slider')
@stop
@section('content')
    @include('layout.partials.services')
    <div class="section notopmargin clearfix" style="padding: 100px 0">
        <div class="container clearfix">
            <div class="row clearfix" style="position: relative;">
                <div class="col-lg-6">

                    <img src="{{asset('client/img/1.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="heading-block">
                        <h3>FOR ALL YOUR LOGISTIC NEEDS</h3><br>
                        <p>Wonderful people, leading-edge abilities</p>
                    </div>
                    <p>We connect businesses to improve their logistics department to

                        reduce costs, save time and have a lower stress.

                        Our international team of logistics experts will get behind your work with
                        passion and enthusiasm, delivering results far beyond your expectations <br><strong>Max
                            Logistics

                            helps all companies to make their collaboration fast, secure and cheap by
                            our online transport platform and logistics consulting office.</strong></p>
                </div>
            </div>
        </div>
    </div>
    @include('layout.partials.statistics')
    <div class="container clearfix">

        <div class="row clearfix topmargin bottommargin">

            <div class="col-md-6 topmargin bottommargin-sm">

                <div class="heading-block nobottomborder">
                    <h2 class="nott ls0" style="font-size: 44px; line-height: 1.2">THE MISSION</h2>
                </div>
                <span style="color: #BBB;">We achieve in every possible way to provide our customers with the
                                            highest quality guarantee, speed and service regarding the import-export of
                                            goods.</span>
                <div class="clear"></div>
            </div>

            <div class="col-md-6 topmargin bottommargin-sm">

                <div class="heading-block nobottomborder">
                    <h2 class="nott ls0" style="font-size: 44px; line-height: 1.2">OUR VISION</h2>
                </div>
                <span style="color: #BBB;">Is to become the best company with the latest and best platform in the
                                            logistics market and leading company in the import and export
                                            market.</span>
                <div class="clear"></div>
            </div>
        </div>

    </div>
    @include('layout.partials.partners')
    <div class="container clearfix">

        <div class="row clearfix topmargin bottommargin">


            <div class="col-md-6 topmargin bottommargin-sm">
                <img src="{{asset('media/truck1.jpg')}}" alt="">
            </div>
            <div class="col-md-6 topmargin bottommargin-sm">
                <h1 class="text-center">A platform, a marketplace and an agency with professional agents will serve
                    you.</h1>
                <ol style="font-size: 20px; padding:40px !important;">
                    <li style="padding-bottom: 5px">Best contacts for import - export.</li>
                    <li style="padding-bottom: 5px">The choice of serious companies in the market that offer the speed
                        and
                        safety on
                        transport
                        of freights
                    </li>
                    <li style="padding-bottom: 5px">Monitoring 24h your freight or your truck from personalized GPS</li>
                    <li style="padding-bottom: 5px">A structured group analyzes and sets the fastest and the safest way
                        for
                        you
                    </li>
                    <li style="padding-bottom: 5px">Many offers that brings to you the best price.</li>
                </ol>


            </div>
        </div>
    </div>

    <div class="container clearfix">

        <div class="row clearfix topmargin bottommargin">

            <div class="col-md-6 topmargin bottommargin-sm">
                <h1>We deliver innovation</h1>
                <p>Our clients come to us with complex challenges that need solving. <br>
                    That’s why we take the time to fully understand their business goals, their mission and for this
                    we have create an innovative solution to their challenges.</p>
            </div>

            <div class="col-md-6 topmargin bottommargin-sm">
                <img src="{{asset('media/truck2.jpg')}}" alt="">
            </div>
        </div>
    </div>
@stop