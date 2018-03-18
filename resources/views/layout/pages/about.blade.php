@extends('layout.index')
@section('content')
    <style>
        p {
            font-size: 17px;
        }
    </style>
    <div class="container-fluid block-content">
        <div class="row main-grid">
            <div style="text-align: center;">
                <h2>About Us</h2>
            </div>
            <div>
                <div class="container-fluid inner-offset">
                    <div class="hgroup text-center wow zoomIn" data-wow-delay="0.3s">
                        <h2>FOR ALL YOUR LOGISTIC NEEDS</h2>
                        <h1>Wonderful people, leading-edge abilities</h1>
                    </div>
                    <ul class="nav nav-tabs wow fadeIn" data-wow-delay="0.3s" id="myTab">
                        <li class="active"><a href="#tab1" data-toggle="tab">WHY CHOOSE US</a></li>
                        <li><a href="#tab2" data-toggle="tab">THE MISSION</a></li>
                        <li><a href="#tab3" data-toggle="tab">OUR VISION</a></li>
                    </ul>

                    <div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s" style="margin-top: 10px">
                        <div class="tab-pane active" id="tab1">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="full-width" src="{{asset('client/img/1.jpg')}}" alt="Img">
                                </div>
                                <div class="col-sm-7">
                                    <p>We connect businesses to improve their logistics department to

                                        reduce costs, save time and have a lower stress.

                                        Our international team of logistics experts will get behind your work with
                                        passion and enthusiasm, delivering results far beyond your expectations</p>
                                    <p><strong>Max Logistics

                                            helps all companies to make their collaboration fast, secure and cheap by
                                            our online transport platform and logistics consulting office.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="full-width" src="{{asset('client/img/1.jpg')}}" alt="Img">
                                </div>
                                <div class="col-sm-7 text-block">
                                    <p><strong>We achieve in every possible way to provide our customers with the
                                            highest quality guarantee, speed and service regarding the import-export of
                                            goods.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="full-width" src="{{asset('client/img/1.jpg')}}" alt="Img">
                                </div>
                                <div class="col-sm-7 text-block">
                                    <p><strong>Is to become the best company with the latest and best platform in the
                                            logistics market and leading company in the import and export
                                            market.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layout.partials.statistics')

                </div>

                <div class="container-fluid wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="text-center">A platform, a marketplace and an agency <br> with professional agents will serve
                        you.</h1>
                    <ol style="font-size: 20px;">
                        <li style="padding-bottom: 5px">Best contacts for import - export.</li>
                        <li style="padding-bottom: 5px">The choice of serious companies in the market that offer the speed and safety on
                            transport
                            of freights
                        </li>
                        <li style="padding-bottom: 5px">Monitoring 24h your freight or your truck from personalized GPS</li>
                        <li style="padding-bottom: 5px">A structured group analyzes and sets the fastest and the safest way for you</li>
                        <li style="padding-bottom: 5px">Many offers that brings to you the best price.</li>
                    </ol>


                </div>

                <div class="container-fluid text-center wow fadeInUp" data-wow-delay="0.6s" style="margin-top: 50px">
                    <h1>We deliver innovation</h1>
                    <p>Our clients come to us with complex challenges that need solving. <br>
                        That’s why we take the time to fully understand their business goals, their mission and for this
                        we have create an innovative solution to their challenges.</p>
                </div>


                @include('layout.partials.partners')
            </div>
        </div>
    </div>
@stop