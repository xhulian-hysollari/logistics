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
                        Voghera Italy
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
                <form novalidate id="contactForm" class="reply-form form-inline">
                    <div class="row form-elem">
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <i class="fa fa-user"></i>
                                <input type="text" name="user-name" id="user-name"
                                       placeholder="{{trans('contact.first_name')}}"
                                       required="required">
                            </div>
                            <div class="default-inp form-elem">
                                <i class="fa fa-envelope"></i>
                                <input type="text" name="user-email" id="user-email"
                                       placeholder="{{trans('contact.email')}}"
                                       required="required">
                            </div>
                        </div>
                        <div class="col-sm-6 form-elem">
                            <div class="default-inp form-elem">
                                <i class="fa fa-user"></i>
                                <input type="text" name="user-lastname" id="user-lastname"
                                       placeholder="{{trans('contact.last_name')}}">
                            </div>
                            <div class="default-inp form-elem">
                                <i class="fa fa-phone"></i>
                                <input type="text" name="user-phone" id="user-phone"
                                       placeholder="{{trans('contact.phone')}}">
                            </div>
                        </div>
                    </div>
                    <div class="default-inp form-elem">
                        <input type="text" name="user-subject" id="user-subject"
                               placeholder="{{trans('contact.subject')}}">
                    </div>
                    <div class="form-elem default-inp">
                        <textarea id="user-message" placeholder="{{trans('contact.message')}}"></textarea>
                    </div>
                    <div class="form-elem">
                        <button type="submit" class="btn btn-success btn-default">{{trans('contact.submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop