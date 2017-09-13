@extends('admin.admin')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <p class="col-lg-12">
                <h1 class="no-margin">{{$result->buddy->full_name}}</h1>
                <div class="btn-group stick-top-right">
                    <a href="" class="btn btn-icon-toggle btn-default"><i class="md md-delete"></i></a>
                </div>
                @foreach($result->messages as $message)
                    @if($message->user_id == Sentinel::getUser()->id)
                        <p style="background-color: #cbe6fc; padding: 15px; width: 85%" class="pull-right">
                            {{$message->message}}<span
                                    class="pull-right text-default-light">{{\Carbon\Carbon::parse($message->created_at)->format('d M y H:i a')}}</span>
                        </p>
                    @else
                        <p style="background-color: #D1E5BB; padding: 15px; width: 85%" class="pull-left">
                            {{$message->message}}<span
                                    class="pull-right text-default-light">{{\Carbon\Carbon::parse($message->created_at)->format('d M y H:i a')}}</span>
                        </p>
                    @endif
                @endforeach
                <form action="{{route('messages.store', ['id' => $result->id, 'receiver_id' => $result->buddy->id])}}" class="form" method="post">
                    @include('admin.inbox.partials.form')
                </form>
            </div><!--end .col -->
        </div>
    </div>
@stop
