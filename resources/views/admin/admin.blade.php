<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@section('title') @show</title>
    <link href="{{asset('admin/css/vendor/all.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/app/app.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .form-group.form-control-default.has-error {
            border-color: #e74c3c;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
    </style>
    @section('css')
    @show
</head>
<body>
<div class="st-container">
@include('admin.partials.header')
    <div class="st-pusher">
    @include('admin.partials.sidebar')
        <div class="st-content" id="content">
            <div class="st-content-inner">
                <div class="container-fluid">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @section('content')
                    @show
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.partials.footer')

<script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "admin",
        skins: {
            "default": {
                "primary-color": "#3498db"
            }
        }
    };
</script>
<script src="{{asset('client/js/jquery-1.11.3.min.js')}}"></script>
{{--<script src="{{asset('admin/js/vendor/all.js')}}"></script>--}}
{{--<script src="{{asset('admin/js/app/app.js')}}"></script>--}}
@section('js')
@show
</body>
</html>