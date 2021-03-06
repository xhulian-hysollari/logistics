@extends('admin.admin')
@section('content')
    @if(Sentinel::inRole('admin'))

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="embed-api-auth-container"></div>
                    <div id="chart-container"></div>
                    <div id="view-selector-container"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-head">
                    <header>Registration history</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div><!--end .card-head -->
                <div class="card-body no-padding height-9">
                    <div class="stick-bottom-left-right force-padding">
                        <div id="flot-registrations" class="flot height-8" data-title="Registration history"
                             data-color="#0aa89e"></div>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

        <div class="col-md-6">
            <div class="card">
                <div class="card-head">
                    <header>Activity history</header>
                    <div class="tools">
                        <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                        <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                        <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                    </div>
                </div><!--end .card-head -->
                <div class="card-body no-padding height-9">
                    <div class="stick-bottom-left-right force-padding">
                        <div id="visitor-chart" class="flot height-8" data-title="Activity visits" data-color="#9C27B0,#0aa89e,#e26161"></div>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

    @endif
    {{--@if(Sentinel::inRole('user'))--}}

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">
                        <strong class="pull-right text-danger text-lg">Freights Listed</strong>
                        <strong class="text-xl">{{count(Sentinel::getUser()->freights)}}</strong><br/>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">
                        <strong class="pull-right text-danger text-lg">Trucks Listed</strong>
                        <strong class="text-xl">{{count(Sentinel::getUser()->trucks)}}</strong><br/>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">
                        <strong class="pull-right text-danger text-lg">Contracts listed</strong>
                        <strong class="text-xl">{{count(Sentinel::getUser()->contracts)}}</strong><br/>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">
                        <strong class="pull-right text-danger text-lg">Total bids</strong>
                        <strong class="text-xl">{{count(Sentinel::getUser()->my_bids)}}</strong><br/>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

        <div class="col-md-4 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">
                        <strong class="pull-right text-danger text-lg">Total Offers Received</strong>
                        <strong class="text-xl">{{count(Sentinel::getUser()->offer)}}</strong><br/>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

    {{--@endif--}}
@stop

@section('js')
    <script>
        (function (w, d, s, g, js, fs) {
            g = w.gapi || (w.gapi = {});
            g.analytics = {
                q: [], ready: function (f) {
                    this.q.push(f);
                }
            };
            js = d.createElement(s);
            fs = d.getElementsByTagName(s)[0];
            js.src = 'https://apis.google.com/js/platform.js';
            fs.parentNode.insertBefore(js, fs);
            js.onload = function () {
                g.load('analytics');
            };
        }(window, document, 'script'));
    </script>
    <script>

        gapi.analytics.ready(function () {

            /**
             * Authorize the user immediately if the user has already granted access.
             * If no access has been created, render an authorize button inside the
             * element with the ID "embed-api-auth-container".
             */
            gapi.analytics.auth.authorize({
                container: 'embed-api-auth-container',
                clientid: '222071272823-8b6264fpc36kb1unqjnuts8b75c5o13b.apps.googleusercontent.com'
            });


            /**
             * Create a new ViewSelector instance to be rendered inside of an
             * element with the id "view-selector-container".
             */
            var viewSelector = new gapi.analytics.ViewSelector({
                container: 'view-selector-container'
            });

            // Render the view selector to the page.
            viewSelector.execute();


            /**
             * Create a new DataChart instance with the given query parameters
             * and Google chart options. It will be rendered inside an element
             * with the id "chart-container".
             */
            var dataChart = new gapi.analytics.googleCharts.DataChart({
                query: {
                    metrics: 'ga:sessions',
                    dimensions: 'ga:date',
                    'start-date': '30daysAgo',
                    'end-date': 'yesterday'
                },
                chart: {
                    container: 'chart-container',
                    type: 'LINE',
                    options: {
                        width: '100%'
                    }
                }
            });


            /**
             * Render the dataChart on the page whenever a new view is selected.
             */
            viewSelector.on('change', function (ids) {
                dataChart.set({query: {ids: ids}}).execute();
            });

        });
    </script>

    <script src="{{asset('admin/js/libs/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/jquery.flot.time.min.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/js/libs/flot/curvedLines.js')}}"></script>
    <script>
        var o = this;
        var chart = $("#flot-registrations");

        // Elements check
        if (!$.isFunction($.fn.plot) || chart.length === 0) {
//            return false;
        }

        var data = [
            {
                label: 'Registrations',
                data: [

                        @foreach($registrations as $key => $registration)
                            [moment({{$key + 1}}, 'M').valueOf(), {{$registration}}],
                        @endforeach
                ],
                last: true
            }
        ];

        // Chart options
        var labelColor = chart.css('color');
        var options = {
            colors: chart.data('color').split(','),
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2
                },
                points: {
                    show: true,
                    radius: 3,
                    lineWidth: 2
                }
            },
            legend: {
                show: false
            },
            xaxis: {
                mode: "time",
                timeformat: "%b %y",
                color: 'rgba(0, 0, 0, 0)',
                font: {color: labelColor}
            },
            yaxis: {
                font: {color: labelColor}
            },
            grid: {
                borderWidth: 0,
                color: labelColor,
                hoverable: true
            }
        };
        chart.width('100%');

        // Create chart
        var plot = $.plot(chart, data, options);

        // Hover function
        var tip, previousPoint = null;
        chart.bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    var x = item.datapoint[0];
                    var y = item.datapoint[1];
                    var tipLabel = '<strong>' + $(this).data('title') + '</strong>';
                    var tipContent = y + " " + item.series.label.toLowerCase() + " on " + moment(x).format('dddd');

                    if (tip !== undefined) {
                        $(tip).popover('destroy');
                    }
                    tip = $('<div></div>').appendTo('body').css({left: item.pageX, top: item.pageY - 5, position: 'absolute'});
                    tip.popover({html: true, title: tipLabel, content: tipContent, placement: 'top'}).popover('show');
                }
            }
            else {
                if (tip !== undefined) {
                    $(tip).popover('destroy');
                }
                previousPoint = null;
            }
        });
    </script>
    <script>
        var chart = $("#visitor-chart");
        if (!$.isFunction($.fn.plot) || chart.length === 0) {
//            return;
        }

        var o = this;
        var labelColor = chart.css('color');
        var data = [
            {
                label: 'Freights',
                data: [
                        @foreach($freights as $key => $registration)
                    [moment({{$key + 1}}, 'M').valueOf(), {{$registration}}],
                    @endforeach
                ],
                last: true
            },
            {
                label: 'Trucks',
                data: [
                        @foreach($trucks as $key => $registration)
                    [moment({{$key + 1}}, 'M').valueOf(), {{$registration}}],
                    @endforeach
                ],
                last: true
            },
            {
                label: 'Tenders',
                data: [
                        @foreach($tenders as $key => $registration)
                    [moment({{$key + 1}}, 'M').valueOf(), {{$registration}}],
                    @endforeach
                ],
                last: true
            }
        ];

        var options = {
            colors: chart.data('color').split(','),
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2
                },
                points: {
                    show: true,
                    radius: 3,
                    lineWidth: 2
                }
            },
            legend: {
                show: true
            },
            xaxis: {
                mode: "time",
                timeformat: "%b",
                color: 'rgba(0, 0, 0, 0)',
                font: {color: labelColor}
            },
            yaxis: {
                font: {color: labelColor}
            },
            grid: {
                borderWidth: 0,
                color: labelColor,
                hoverable: true
            }
        };

        chart.width('100%');
        var plot = $.plot(chart, data, options);

        var tip, previousPoint = null;
        chart.bind("plothover", function (event, pos, item) {
            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    var x = item.datapoint[0];
                    var y = item.datapoint[1];
                    var tipLabel = '<strong>' + $(this).data('title') + '</strong>';
                    var tipContent = y + " " + item.series.label.toLowerCase() + " on " + moment(x).format('dddd');

                    if (tip !== undefined) {
                        $(tip).popover('destroy');
                    }
                    tip = $('<div></div>').appendTo('body').css({left: item.pageX, top: item.pageY - 5, position: 'absolute'});
                    tip.popover({html: true, title: tipLabel, content: tipContent, placement: 'top'}).popover('show');
                }
            }
            else {
                if (tip !== undefined) {
                    $(tip).popover('destroy');
                }
                previousPoint = null;
            }
        });
    </script>
@stop