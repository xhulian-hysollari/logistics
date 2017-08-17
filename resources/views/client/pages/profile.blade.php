@extends('client.client')
@section('content')
    <div class="row">
        <div class="container">
            <h4>Registration</h4>
            <div class="row" style="margin-bottom: 20px;">
                <form id="profile-form" method="post" style="width: 100%" action="{{route('register.autobot')}}" enctype="multipart/form-data">
                    <div class="col-md-6 col-md-offset-3 form-elem">
                        <div class="default-inp form-elem">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" id="full_name"
                                   placeholder="Full Name">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="company_logo">Company Logo</label>
                            <input type="file" accept="image/*" name="company_logo" id="company_logo">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email"
                                   placeholder="Email">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                   placeholder="********">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="confirm_password">Confirm password</label>
                            <input type="password" name="confirm_password" id="confirm_password"
                                   placeholder="********">
                        </div>
                    </div>
                    <div class="pull-right">
                        <button id="profile-btn" type="submit"
                                class="btn btn-primary next-step">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
@section('css')
    <style>
        .default-inp select {
            display: block;
            border: none;
            padding: 0 25px;
            height: 50px;
            line-height: 50px;
            width: 100%;
        }
        .panel {
            text-align: center;
        }

        .panel:hover {
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35);
        }

        .panel-body {
            padding: 0px;
            text-align: center;
        }

        .the-price {
            background-color: rgba(220, 220, 220, .17);
            box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
            padding: 20px;
            margin: 0;
        }

        .the-price h1 {
            line-height: 1em;
            padding: 0;
            margin: 0;
        }

        .subscript {
            font-size: 25px;
        }

        /* CSS-only ribbon styles    */
        .cnrflash {
            /*Position correctly within container*/
            position: absolute;
            top: -9px;
            right: 4px;
            z-index: 1; /*Set overflow to hidden, to mask inner square*/
            overflow: hidden; /*Set size and add subtle rounding  		to soften edges*/
            width: 100px;
            height: 100px;
            border-radius: 3px 5px 3px 0;
        }

        .cnrflash-inner {
            /*Set position, make larger then 			container and rotate 45 degrees*/
            position: absolute;
            bottom: 0;
            right: 0;
            width: 145px;
            height: 145px;
            -ms-transform: rotate(45deg); /* IE 9 */
            -o-transform: rotate(45deg); /* Opera */
            -moz-transform: rotate(45deg); /* Firefox */
            -webkit-transform: rotate(45deg); /* Safari and Chrome */
            -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
            -ms-transform-origin: 100% 100%; /* IE 9 */
            -o-transform-origin: 100% 100%; /* Opera */
            -moz-transform-origin: 100% 100%; /* Firefox */
            background-image: linear-gradient(90deg, transparent 50%, rgba(255, 255, 255, .1) 50%), linear-gradient(0deg, transparent 0%, rgba(1, 1, 1, .2) 50%);
            background-size: 4px, auto, auto, auto;
            background-color: #aa0101;
            box-shadow: 0 3px 3px 0 rgba(1, 1, 1, .5), 0 1px 0 0 rgba(1, 1, 1, .5), inset 0 -1px 8px 0 rgba(255, 255, 255, .3), inset 0 -1px 0 0 rgba(255, 255, 255, .2);
        }

        .cnrflash-inner:before, .cnrflash-inner:after {
            /*Use the border triangle trick to make  				it look like the ribbon wraps round it's 				container*/
            content: " ";
            display: block;
            position: absolute;
            bottom: -16px;
            width: 0;
            height: 0;
            border: 8px solid #800000;
        }

        .cnrflash-inner:before {
            left: 1px;
            border-bottom-color: transparent;
            border-right-color: transparent;
        }

        .cnrflash-inner:after {
            right: 0;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }

        .cnrflash-label {
            /*Make the label look nice*/
            position: absolute;
            bottom: 0;
            left: 0;
            display: block;
            width: 100%;
            padding-bottom: 5px;
            color: #fff;
            text-shadow: 0 1px 1px rgba(1, 1, 1, .8);
            font-size: 0.95em;
            font-weight: bold;
            text-align: center;
        }
    </style>
@stop