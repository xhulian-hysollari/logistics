@extends('layout.index')
@section('content')
    <div class="row">
        <div class="container-fluid">
            <h4>Registration</h4>
            <div class="row" style="margin-bottom: 20px;">
                <form id="profile-form" method="post" style="width: 100%" action="{{route('register.autobot')}}" enctype="multipart/form-data">
                    <div class="form-elem">
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
                        <div class="form-elem pull-right">
                            <button id="profile-btn" type="submit"
                                    class="btn btn-primary next-step">Register</button>
                        </div>
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

        .nav-tabs > li {
            float: none;
            display: inline-block;
            border: none;
            border-right: none;
            margin-right: 5px;
            background: #fff;
        }

        .wizard {
            margin: 20px auto;
            background: #fff;
        }

        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom-color: #e0e0e0;
        }

        .wizard > div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #e0e0e0;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #fff;
            border: 2px solid #5bc0de;

        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid #333;
        }

        .wizard .nav-tabs > li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #5bc0de;
            transition: 0.1s ease-in-out;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #5bc0de;
        }

        .wizard .nav-tabs > li a {
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            text-align: center;
            position: relative;
            padding-top: 20px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media ( max-width: 585px ) {

            .wizard {
                width: 90%;
                height: auto !important;
            }

            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard .nav-tabs > li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
    </style>
@stop