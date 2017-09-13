<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Xhulian Hysollari">
    <title>@section('title') @show</title>
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet'
          type='text/css'/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/theme-default/bootstrap.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/theme-default/materialadmin.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/theme-default/font-awesome.min.css')}}"/>
    <link type="text/css" rel="stylesheet"
          href="{{asset('admin/css/theme-default/material-design-iconic-font.min.css')}}"/>
    <script type="text/javascript" src="{{asset('admin/js/libs/utils/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/libs/utils/respond.min.js')}}"></script>
    <![endif]-->
    @section('css')
    @show
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
@include('admin.partials.header')
<!-- BEGIN BASE-->
<div id="base">
    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-body">
                <div class="row">
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
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
    @include('admin.partials.sidebar')
</div>
{{--@include('admin.partials.footer')--}}
<!-- BEGIN JAVASCRIPT -->
<script src="{{asset('admin/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('admin/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('admin/js/libs/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/libs/spin.js/spin.min.js')}}"></script>
<script src="{{asset('admin/js/libs/autosize/jquery.autosize.min.js')}}"></script>
<script src="{{asset('admin/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
<script src="{{asset('admin/js/core/source/App.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppNavigation.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppOffcanvas.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppCard.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppForm.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppNavSearch.js')}}"></script>
<script src="{{asset('admin/js/core/source/AppVendor.js')}}"></script>
<script src="{{asset('admin/js/core/demo/Demo.js')}}"></script>
<script src="{{asset('admin/js/core/demo/DemoLayouts.js')}}"></script>
<!-- END JAVASCRIPT -->
@section('js')
@show
</body>
</html>