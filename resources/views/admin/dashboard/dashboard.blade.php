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
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="force-padding text-sm text-default-light">
                                <p>
                                    <i class="md md-mode-comment text-primary-light"></i>
                                    The registrations are measured from the time that the redesign was fully implemented
                                    and after the first e-mailing.
                                </p>
                            </div>
                        </div><!--end .col -->
                        <div class="col-sm-6">
                            <div class="force-padding pull-right text-default-light">
                                <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
                                <i class="fa fa-caret-up text-success fa-fw"></i> more registrations
                            </div>
                        </div><!--end .col -->
                    </div><!--end .row -->
                    <div class="stick-bottom-left-right force-padding">
                        <div id="flot-registrations" class="flot height-5" data-title="Registration history"
                             data-color="#0aa89e"></div>
                    </div>
                </div><!--end .card-body -->
            </div><!--end .card -->
        </div><!--end .col -->

    @else



    @endif
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

        // Chart data
        var data = [
            {
                label: 'Registrations',
                data: [
                    [moment().subtract(11, 'month').valueOf(), {{count(\App\Models\User::all())}}],
                    [moment().subtract(10, 'month').valueOf(), 2450],
                    [moment().subtract(9, 'month').valueOf(), 3800],
                    [moment().subtract(8, 'month').valueOf(), 2650],
                    [moment().subtract(7, 'month').valueOf(), 3905],
                    [moment().subtract(6, 'month').valueOf(), 5250],
                    [moment().subtract(5, 'month').valueOf(), 3600],
                    [moment().subtract(4, 'month').valueOf(), 4900],
                    [moment().subtract(3, 'month').valueOf(), 6200],
                    [moment().subtract(2, 'month').valueOf(), 5195],
                    [moment().subtract(1, 'month').valueOf(), 6500],
                    [moment().valueOf(), 7805]
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
@stop