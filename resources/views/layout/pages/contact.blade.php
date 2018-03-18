@extends('layout.index')
@section('content')
    <div class="container topmargin" style="padding-left: 20px; padding-right: 20px;">
        <div class="row">
            <div class="col-sm-4">
                <h4>{{trans('contact.head')}}</h4>
                <p>{{trans('contact.24')}}</p>
                <div class="" data-wow-delay="0.3s">
                    <div style="display: flex; align-items: center">
                        <i class="i-plain icon-map-marker"></i>
                        <span><strong>MAX Logistics LTD.</strong>
                            <br>Rruga ymer kurti 1001 Tirane Albania</span>
                    </div>
                    <div style="display: flex; align-items: center"><i class="i-plain icon-phone"></i>
                        <span>00355688400008</span>
                    </div>
                    <div style="display: flex; align-items: center">
                        <i class="i-plain icon-envelope"></i>
                        <span>info@maxlogistics.eu</span>
                    </div>
                </div>
                <br>
                <h4>{{trans('contact.italy')}}</h4>
                <div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
                    <div style="display: flex; align-items: center"><i class="i-plain icon-map-marker"></i> <span>Voghera Italy </span></div>
                    <div style="display: flex; align-items: center"><i class="i-plain icon-phone"></i><span>00355688400008</span></div>
                    <div style="display: flex; align-items: center"><i class="i-plain icon-envelope"></i><span>info@maxlogistics.eu</span></div>
                </div>
            </div>
            <div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
                <h4>{{trans('contact.send')}}</h4>
                <div id="success"></div>
                <form novalidate id="contactForm" class="reply-form" action="{{action('ContactController@contact')}}" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class=" form-group">
                                <i class="fa fa-user"></i>
                                <input class="required sm-form-control input-block-level" type="text" name="full_name" id="full_name"
                                       placeholder="Full Name"
                                       required="required">
                            </div>
                            <div class=" form-group">
                                <i class="fa fa-phone"></i>
                                <input class="required sm-form-control input-block-level" type="text" name="phone" id="phone"
                                       placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class=" form-group">
                                <i class="fa fa-envelope"></i>
                                <input class="required sm-form-control input-block-level" type="text" name="email" id="email"
                                       placeholder="Email Address"
                                       required="required">
                            </div>
                        </div>
                    </div>
                    <div class=" form-group">
                        <input class="required sm-form-control input-block-level" type="text" name="subject" id="subject"
                               placeholder="Topic">
                    </div>
                    <div class=" form-group">
                        <textarea class="required sm-form-control input-block-level" id="message" name="message" placeholder="Write your message here"></textarea>
                    </div>
                    <div class=" form-group">
                        <button type="submit" class="button button-large button-3d nomargin"> Contact us</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop