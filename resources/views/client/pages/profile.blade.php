@extends('client.client')
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
        .the-price h1 {
            line-height: 1em;
            padding: 0;
            margin: 0;
        }
    </style>
@stop