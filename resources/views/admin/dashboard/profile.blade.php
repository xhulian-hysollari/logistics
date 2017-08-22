@extends('admin.admin')

@section('content')
    <?php
        $user = \Cartalyst\Sentinel\Laravel\Facades\Sentinel::getUser();
    ?>
    <div class="mainbody container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="media">
                            <div align="center">
                                <img class="thumbnail img-responsive" src="{{asset('storage/'. $user->company_logo)}}" width="300px" height="300px">
                            </div>
                            <div class="media-body">
                                <hr>
                                <h3><strong>About Me</strong></h3>
                                <p>{{$user->profile->about_me}}</p>
                                <hr>
                                <h3><strong>Email</strong></h3>
                                <p>{{$user->email}}</p>
                                <hr>
                                <h3><strong>Gender</strong></h3>
                                <p>Unknown</p>
                                <hr>
                                <h3><strong>Birthday</strong></h3>
                                <p>January 01 1901</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="panel-title" style="font-size:30px;">{{ucwords($user->full_name)}}</h1>
                        <a href="{{$user->profile->website}}" class="btn btn-link" style="text-decoration:none; font-size: 12pt;" target="_blank"><i class="fa fa-globe"></i> {{$user->profile->company}}</a>
                        <br>
                        <span class="pull-left">
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-phone" aria-hidden="true"></i> {{$user->profile->telephone}}</a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-mobile-phone" aria-hidden="true"></i> {{$user->profile->mobile}} </a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-fax" aria-hidden="true"></i> {{$user->profile->fax}} </a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-skype" aria-hidden="true"></i> {{$user->profile->skype}} </a>
                        </span>
                    </div>
                </div>
                <hr>
                <!-- Simple post content example. -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                            </a>
                        </div>
                        <h4><a href="#" style="text-decoration:none;"><strong>John Doe</strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small></h4>
                        <hr>
                        <div class="post-content">
                            <p>Simple post content example.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                        </div>
                        <hr>
                        <div>
                            <div class="pull-right btn-group-xs">
                                <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
                                <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
                            </div>
                            <div class="pull-left">
                                <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
                            </div>
                            <br>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop