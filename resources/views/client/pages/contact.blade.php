@extends('client.client')
@section('content')
    <div class="container-fluid block-content">
        <div class="row main-grid">
            <div class="col-sm-4">
                <h4>{{trans('contact.head')}}</h4>
                <p>{{trans('contact.24')}}</p>
                <div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
                    <div>
                        <span><i class="fa fa-location-arrow"></i></span>
                        <div><strong>MAX Logistics LTD.</strong>
                            <br>Rruga ymer kurti 1001 Tirane Albania
                        </div>
                    </div>
                    <div>
                        <span><i class="fa fa-phone"></i></span>
                        <div>00355688400008</div>
                    </div>
                    <div>
                        <span><i class="fa fa-envelope"></i></span>
                        <div>info@maxlogistics.eu</div>
                    </div>
                </div>
                <h4>{{trans('contact.italy')}}</h4>
                <div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
                    <div>
                        <span><i class="fa fa-location-arrow"></i></span>
                        <div> Voghera Italy </div>
                    </div>
                    <div>
                        <span><i class="fa fa-phone"></i></span>
                        <div>00355688400008</div>
                    </div>
                    <div>
                        <span><i class="fa fa-envelope"></i></span>
                        <div>info@maxlogistics.eu</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
                <h4>{{trans('contact.send')}}</h4>
                <div id="success"></div>
                <form novalidate id="contactForm" class="reply-form form-inline" action="{{action('ContactController@contact')}}" method="post">
                    <div class="row form-elem">
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <i class="fa fa-user"></i>
                                <input type="text" name="full_name" id="full_name"
                                       placeholder="Full Name"
                                       required="required">
                            </div>
                            <div class="default-inp form-elem">
                                <i class="fa fa-phone"></i>
                                <input type="text" name="phone" id="phone"
                                       placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-sm-6 form-elem">

                            <div class="default-inp form-elem">
                                <i class="fa fa-envelope"></i>
                                <input type="text" name="email" id="email"
                                       placeholder="Email Address"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class="default-inp form-elem">
                        <input type="text" name="subject" id="subject"
                               placeholder="Topic">
                    </div>
                    <div class="form-elem default-inp">
                        <textarea id="message" name="message" placeholder="Write your message here"></textarea>
                    </div>
                    <div class="form-elem">
                        <button type="submit" class="btn btn-success btn-default"> Contact us</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop