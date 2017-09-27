@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- BEGIN INBOX NAV -->
                <div class="col-lg-12">
                    <div class="text-divider visible-xs"><span>Email list</span></div>
                    <div class="row">
                        <!-- BEGIN INBOX EMAIL LIST -->
                        <div class="col-md-12 scroll-sm">
                            <div class="list-group list-email list-gray">
                                @foreach($conversations as $conversation)
                                    <a href="{{route('messages.show', $conversation->buddy->id)}}" class="list-group-item">
                                        <h5>{{$conversation->buddy->full_name}} </h5>
                                        @if(Sentinel::getUser()->unread_messages > 0)
                                            <span class="badge"> {{dd(Sentinel::getUser()->findMessages('unread',$conversation->id))}}</span>
                                        @endif
                                        <h4>{{$conversation->subject}}</h4>
                                        <p class="hidden-xs hidden-sm">{{$conversation->latest_message->message}}</p>
                                        <div class="stick-top-right small-padding text-default-light text-sm">{{\Carbon\Carbon::parse($conversation->latest_message->created_at)->format('d M y H:i a')}}</div>
                                    </a>
                                @endforeach
                            </div><!--end .list-group -->
                        </div><!--end .col -->
                        <!-- END INBOX EMAIL LIST -->
                    </div><!--end .row -->
                </div><!--end .col -->
            </div><!--end .col -->
        </div><!--end .col -->
    </div><!--end .col -->
@stop
