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
                                <img class="thumbnail img-responsive" src="{{asset('storage/'. $user->company_logo)}}"
                                     width="300px" height="300px">
                            </div>
                            <div class="media-body">
                                <hr>
                                <h3><strong>About Me</strong></h3>
                                <p>{{$user->profile->about_me}}</p>
                                <hr>
                                <h3><strong>Email</strong></h3>
                                <p>{{$user->email}}</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="panel-title" style="font-size:30px;">{{ucwords($user->full_name)}}</h1>
                        <a href="{{$user->profile->website}}" class="btn btn-link"
                           style="text-decoration:none; font-size: 12pt;" target="_blank"><i
                                    class="fa fa-globe"></i> {{$user->profile->company}}</a>
                        <br>
                        <span class="pull-left">
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-phone"
                                                                                              aria-hidden="true"></i> {{$user->profile->telephone}}</a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i
                                        class="fa fa-fw fa-mobile-phone"
                                        aria-hidden="true"></i> {{$user->profile->mobile}} </a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-fax"
                                                                                              aria-hidden="true"></i> {{$user->profile->fax}} </a>
                            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-skype"
                                                                                              aria-hidden="true"></i> {{$user->profile->skype}} </a>
                        </span>
                    </div>
                </div>
                <hr>
            @if (Sentinel::getUser()->subscription('main'))
                <!-- Simple post content example. -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4><strong>Invoices </strong></h4>
                            <hr>
                            <div class="post-content">
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        @foreach(Sentinel::getUser()->invoicesIncludingPending() as $invoice)
                                            <tr>
                                                <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                                                <td>{{ $invoice->total() }}</td>
                                                <td><a href="/user/invoice/{{ $invoice->id }}">Download</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif

            <!-- Simple post content example. -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4><strong>Subscriptions</strong></h4>
                        <hr>
                        <div class="post-content">
                            @if (Sentinel::getUser()->subscription('main')->cancelled())
                                <p>Your subscription ends
                                    on {{ Sentinel::getUser()->subscription('main')->ends_at->format('dS M Y') }}</p>
                            @else
                                <p>You are currently subscribed
                                    to {{ Sentinel::getUser()->subscription('main')->braintree_plan }} plan</p>
                            @endif
                            <ul class="list-group">
                                @foreach (\App\Models\Plan::orderBy('cost','asc')->get() as $plan)
                                    <li class="list-group-item clearfix">
                                        <div class="pull-left">
                                            <h4>{{ $plan->name }}</h4>
                                            <h4>${{ number_format($plan->cost, 2) }} monthly</h4>
                                            @if ($plan->description)
                                                <p>{{ $plan->description }}</p>
                                            @endif
                                        </div>
                                        @if (!Sentinel::getUser()->subscribedToPlan($plan->braintree_plan, 'main'))
                                            <a href="{{ url('/plan', $plan->slug) }}"
                                               class="btn btn-default pull-right">Choose Plan</a>
                                        @else
                                            @if (Sentinel::getUser()->subscription('main')->cancelled())
                                                <form action="{{ route('subscription.resume') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-default pull-right">Resume
                                                        subscription
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('subscription.cancel') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-default pull-right">Cancel
                                                        subscription
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                {{--<!-- Simple post content example. -->--}}
                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body">--}}
                {{--<h4><strong>Contact Info</strong></h4>--}}
                {{--<hr>--}}
                {{--<div class="post-content">--}}
                {{--<form action="#" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="hidden" name="_method" value="PATCH">--}}
                {{--<button type="submit" class="btn btn-default pull-right">Cancel subscription</button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Simple post content example. -->--}}
                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body">--}}
                {{--<h4><strong>Company Info</strong></h4>--}}
                {{--<hr>--}}
                {{--<div class="post-content">--}}
                {{--<form action="#" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="hidden" name="_method" value="PATCH">--}}
                {{--<button type="submit" class="btn btn-default pull-right">Cancel subscription</button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--<!-- Simple post content example. -->--}}
                {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body">--}}
                {{--<h4><strong>Change Password</strong></h4>--}}
                {{--<hr>--}}
                {{--<div class="post-content">--}}
                {{--<form action="#" method="POST">--}}
                {{--{{ csrf_field() }}--}}
                {{--<input type="hidden" name="_method" value="PATCH">--}}
                {{--<button type="submit" class="btn btn-default pull-right">Cancel subscription</button>--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@stop