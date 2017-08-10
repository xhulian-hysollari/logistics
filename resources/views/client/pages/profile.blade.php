@extends('client.client')

@section('content')
    <div class="container-fluid block-content">
        <div class="row main-grid">
            <div>
                <div class="userpic" style="background-image:url({{asset($result->profile_picture)}});"></div>
                <span class="author">{{$result->full_name}}</span>
                <span class="date">{{$result->registration_date}}</span>

            </div>
        </div>
    </div>
@stop