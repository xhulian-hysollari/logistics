@extends('client.client')
@section('content')
    <div class="row">
        <div class="container-fluid">
            <h4>Your Profile</h4>
            <div class="row" style="margin-bottom: 20px;">
                <form id="profile-form" method="post" style="width: 100%" action="{{route('register.autobot')}}" enctype="multipart/form-data">
                    <div class="form-elem">
                        <div class="default-inp form-elem">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" id="telephone"
                                   placeholder="Telephone">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="mobile"
                                   placeholder="Mobile">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="fax">Fax</label>
                            <input type="text" name="fax" id="fax"
                                   placeholder="Fax">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="skype">Skype</label>
                            <input type="text" name="skype" id="skype"
                                   placeholder="Skype">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="languages">Languages</label>
                            <input type="text" name="languages" id="languages"
                                   placeholder="Languages">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="company">Company</label>
                            <input type="text" name="company" id="company"
                                   placeholder="Company">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website"
                                   placeholder="Website">
                        </div>
                        <div class="default-inp form-elem">
                            <label for="about_me">About Me</label>
                            <input type="textarea" name="about_me" id="about_me"
                                   placeholder="About Me">
                        </div>
                        <div class="form-elem pull-right">
                            <button id="profile-btn" type="submit"
                                    class="btn btn-primary next-step">Save Profile</button>
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